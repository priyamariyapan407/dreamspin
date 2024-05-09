<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Reports_model');
    }

    public function index(){
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $data['contest_winners'] = $this->Reports_model->getWinnersGrpByCntest();
        $data['AllWinnersBySpinType'] = array();
        if(!empty($data['contest_winners'])){
             for($i=0;$i<count($data['contest_winners']);$i++){
               $getWinnersBySpinType = $this->Reports_model->getWinnersBySpinType($data['contest_winners'][$i]->contest_category);
               array_push($data['AllWinnersBySpinType'],$getWinnersBySpinType);
             }
        }
        $data['contest_category_info'] = $this->Reports_model->getAllCategoryContestDetails();
        $data['contest_name'] = $this->Reports_model->getAllContestName();
        $data['spin_type'] = $this->Reports_model->getAllSpintype();
        $data['total_contestants'] = $this->Reports_model->getTotalContestants();
        $data['total_winners'] = $this->Reports_model->getTotalWinners();
        $data['months']=$this->Reports_model->getUniqueMonth();
        $data['years']=$this->Reports_model->getUniqueYear();
        $this->load->view('reports/index',$data);
    }
    public function getWinnersList(){
        $date = date('Y-m-d');
        $month = date('F', strtotime($date));
        $year = date('Y', strtotime($date));
        $data['name'] = $this->input->post('name');
        $data['member_id'] = $this->input->post('member_id');
        $data['email_id'] = $this->input->post('email_id');
        $data['contest_category'] = $this->input->post('contest_category');
        $data['contest_name'] = $this->input->post('contest_name');
        $data['spin_type'] = $this->input->post('spin_type');
        $data['created_at'] = $date;
        $data['month'] = $month;
        $data['year'] = $year;
        $this->Reports_model->storeWinners($data);
        echo 'Winners updated successfully';
    }

    


public function getReport(){
    $selected_category_type = $this->input->get('selected_category_type');
    $selected_month = $this->input->get('selected_month');
    $selected_year = $this->input->get('selected_year');
    $contest_name = $this->input->get('contest_name');
    $spin_type = $this->input->get('spin_type');
    $report_list = $this->Reports_model->getWinnersByDateAndCategory($selected_category_type,$selected_month,$selected_year,$contest_name,$spin_type);
    //echo '<pre>'; print_r($report_list);exit;
    $AllWinnersBySpinType = array();
    if(!empty($report_list)){
         for($i=0;$i<count($report_list);$i++){
           $getWinnersBySpinType = $this->Reports_model->getWinnersBySpinTypeFilter($report_list[$i]->contest_category,$selected_month,$selected_year,$contest_name,$spin_type);
           array_push($AllWinnersBySpinType,$getWinnersBySpinType);
         }
    }
  
   $count = 0;    
   $no_records = '';  
   $report_lst = '';
    foreach($report_list as $winners) {
        if(empty($winners->contest_category)){
            $no_records = 'empty';
        }
                $report_lst .=  '<div class="winner_outer_bg"  onclick="toggle(`'.$count.'`)" >
                <div class="row">
                <div class="col-lg-4 winners_bg"> '.$winners->contest_category.' </div>
                <div class="col-lg-4 winners_bg">
                    Total Contestants - '.$winners->total_contestants.'
                </div>
                <div class="col-lg-4 winners_bg">
                <div class="row">
                <div class="col">
                        Total Winners -  '.$winners->total_winners.' 
                </div>
                <div class="col-lg-1 fa_'.$count.'" style="text-align=right">
                        <i class="fa fa-sort-down"></i>
                </div>
                </div>
                </div>
                </div>
                </div>
                <div class="row" align="center" id="'.$count.'" align="center" style="display:none;">
                <div class="row" align="center">';


        foreach($AllWinnersBySpinType[$count] as $spin_type){
        $report_lst .= '<div class="col">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="red_bg">
                        <div>Total Contestants</div>
                        <h2>'.$spin_type->total_contestants.'</h2>
                        <div>Total Winners</div>
                        <h2>'.$spin_type->total_winners.' </h2>
                    </div>

                    <div> '.$spin_type->spin_type .' </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>';
        }
        $report_lst .= ' </div>
</div>';

$no_rec = '<div class="row" align="center"><h3>No Records Found</h3></div>';
$count++; }
if($no_records != 'empty'){
    echo $report_lst;
} else {
    echo $no_rec;
}

}






public function viewWinners() {
$id = $this->uri->segment('3');
$data['winners_info_by_id'] = $this->Reports_model->getWinnersInfoById($id);
$this->load->view('contest_winners/view_winners',$data);
}

public function getWinnersBySpinType(){
return '1';
}


public function deleteWinner() {
$id = $this->input->post('delete_id');
$this->Reports_model->deleteWinner($id,$contest_id);
$this->session->set_flashdata('delete_success','Record deleted successfully');
redirect('Reports');
}


public function sendEmail(){
$id=$this->input->post('winner_id');
$this->load->library('email');
$this->email->initialize(array(
'protocol' => 'smtp',
'smtp_host' => 'smtp.gmail.com',
'smtp_port' => 587,
'smtp_user' => 'padmamariyapan123@gmail.com',
'smtp_pass' => 'Mariyapan!123',
'mailtype' => 'html',
'charset' => 'iso-8859-1'
));
$this->email->from('padmamariyapan123@gmail.com', 'Padmapriya');
$this->email->to('padmapriya.rifluxyss@gmail.com');
$this->email->subject('Test mail');
$this->email->message('Email Message Body');
if ($this->email->send()) {
echo 'Email sent successfully.';
$this->Reports_model->updateWinner($id);
$this->session->set_flashdata('email-success','Email has been sent successfully.');
redirect('Reports');
} else {
echo 'Error sending email.';
$this->Reports_model->updateWinner($id);
$this->session->set_flashdata('email-error','Error in sending email.Please try again.');
redirect('Reports');
}
}

public function getMonthAndDate(){
$category_type = $this->input->get('category_type');
$contest_nme = $this->Reports_model->getcontestname($category_type);
$spin_tpe = $this->Reports_model->getspin_type($category_type);
$total_contst = $this->Reports_model->gettotal_contestants($category_type);
$month_lst = $this->Reports_model->getMonth($category_type);
$year_lst = $this->Reports_model->getyear($category_type);
$getWinners = $this->Reports_model->getWinners($category_type);


$contestname = '<option value="">Contest Name</option>';
if(!empty($contest_nme)){
foreach($contest_nme as $contest_name){
$contestname .= "<option value=$contest_name->contest_name>$contest_name->contest_name</option>";
}
}


$spin_type = '<option value="">Spin Type</option>';
if(!empty($spin_tpe)){
foreach($spin_tpe as $spin){
$spin_type .= "<option value=$spin->spin_type >$spin->spin_type </option>";
}
}
$total_contestants = '<option value="">Total Contestants</option>';
if(!empty($total_contst)){
foreach($total_contst as $contestants){
$total_contestants .= "<option value=$contestants->name>$contestants->name</option>";
}
}
$total_winners = '<option value="">Winners</option>';
if(!empty($getWinners)){
foreach($getWinners as $winners){
$total_winners .= "<option value=$winners->name>$winners->name</option>";
}
}
$month = '<option value="">Month</option>';
if(!empty($month_lst)){
foreach($month_lst as $category){
$month .= "<option value=$category->month>$category->month</option>";
}
}
$year = '<option value="">Year</option>';
if(!empty($year_lst)){
foreach($year_lst as $yr){
$year .= "<option value=$yr->year>$yr->year</option>";
}
}
echo $contestname . '::' .$spin_type. '::' .$total_contestants. '::' .$total_winners. '::' .$month. '::' .$year;
}

public function getContests(){
    $selected_category_type = $this->input->get('selected_category_type');
    $selected_month = $this->input->get('selected_month');
    $selected_year = $this->input->get('selected_year');
    $contest_name = $this->input->get('contest_name');
    $spin_type = $this->input->get('spin_type');
    $Contest_report_list = $this->Reports_model->getWinnerslistfilter($selected_category_type,$selected_month,$selected_year,$contest_name,$spin_type);
    $html = '<option value="">Total Contestants</option>';
    foreach($Contest_report_list as $cotest){
    $html .= "<option value=$cotest->name>$cotest->name</option>";
    } 
    $Contest_winners_list = $this->Reports_model->getWinnersByPromote($selected_category_type,$selected_month,$selected_year,$contest_name,$spin_type);
    $winners = '<option value="">Total Winners</option>';
    foreach($Contest_winners_list as $winners){
    $winners .= "<option value=$winners->name>$winners->name</option>";
    }
    echo $html .'::'. $winners;
}

}

?>