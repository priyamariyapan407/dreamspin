<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContestWinners extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Contest_winners_model');
    }

    public function index(){
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $data['contest_winners'] = $this->Contest_winners_model->getAllContestWinners();
        $data['contest_category_info'] = $this->Contest_winners_model->getAllCategoryContestDetails();
        $data['months']=$this->Contest_winners_model->getUniqueMonth();
        $data['years']=$this->Contest_winners_model->getUniqueYear();
       
        $this->load->view('contest_winners/index',$data);
    }
    public function submitSpinResult(){
        $date = date('Y-m-d');
        $datetime = date('Y-m-d H:i:s');
        // echo $datetime;exit;
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
        $data['created_at_datetime'] = $datetime;
        $this->Contest_winners_model->storeWinners($data);
        echo 'Winners updated successfully';
    }

    public function getSpinInfo(){
        $mobile_number = $this->input->post('member_id');
        $getSpinTimeInfo = $this->Contest_winners_model->getSpinTimeInfo($mobile_number);
        for($r=0;$r<count($getSpinTimeInfo);$r++){
            $playedTime = $getSpinTimeInfo[$r]->created_at_datetime;
        }
        if(!empty($playedTime)){
        $currentDateTime = date('Y-m-d H:i:s');
        $timeA = strtotime($playedTime);

        $timeB = time();
        
        //five minutes in seconds
        $fiveMinutes = 60 * 5;
        
        if ( ($timeA+$fiveMinutes) <= $timeB) {
            // After 5 mins
            $response = array(
                'status'=>'200',
                "data" => array(
                    "free_spin" => 1,
                    "paid_spin" => 10
                )
                );
             echo json_encode($response,JSON_UNESCAPED_SLASHES);
        }
        else {
            // 5 mins have not yet completed
            $response = array(
                'status'=>'200',
                "data" => array(
                    "free_spin" => 0,
                    "paid_spin" => 10
                )
                );
             echo json_encode($response,JSON_UNESCAPED_SLASHES);
        }
    } else {
        // New user
        $response = array(  
            'status'=>'200',
            "data" => array(
                "free_spin" => 0,
                "paid_spin" => 0
            )
            );
         echo json_encode($response,JSON_UNESCAPED_SLASHES);
    }
        
        exit;
        // echo "<pre>"; print_r($getSpinTimeInfo);exit;
    }
        
    


public function getWinnersByDateAndCategory(){
    $selected_category_type = $this->input->get('selected_category_type');
    $selected_month = $this->input->get('selected_month');
    $selected_year = $this->input->get('selected_year');
    $WinnersByDateAndCategory = $this->Contest_winners_model->getWinnersByDateAndCategory($selected_category_type,$selected_month,$selected_year);
     $date_array = array();
    for($i=0;$i<count($WinnersByDateAndCategory);$i++){
       array_push($date_array,$WinnersByDateAndCategory[$i]->created_at);
    }
    $unique_array = array_values(array_unique($date_array));
    $sorted_array = array();
    
    for($j=0;$j<count($unique_array);$j++){
        for($k=0;$k<count($WinnersByDateAndCategory);$k++){

        if($WinnersByDateAndCategory[$k]->created_at == $unique_array[$j]){
            if(empty($sorted_array)){
                array_push($sorted_array,['date'=>$WinnersByDateAndCategory[$k]->created_at,'values'=>[$WinnersByDateAndCategory[$k]]]);
            }
        
        $matched = '';
        $continue = '';
        for($m=0;$m<count($sorted_array);$m++){
         
            if(($sorted_array[$m]['date']) == ($WinnersByDateAndCategory[$k]->created_at)){
                // echo "<pre>"; print_r($sorted_array[$m]['date']);
                $cont = '';
                for($p=0;$p<count($sorted_array[$m]['values']);$p++){
                if(($sorted_array[$m]['values'][$p]->winner_id ) == ($WinnersByDateAndCategory[$k]->winner_id)){
                   
                    $cont = 'yes';
                  
                }
                }
                if($cont == 'yes'){
                  continue;
                } else {
                    array_push($sorted_array[$m]['values'],$WinnersByDateAndCategory[$k]);
                    $matched = 'yes';
                }
               
              
            }
           
        }
        for($n=0;$n<count($sorted_array);$n++){
            if(($sorted_array[$n]['date']) == ($WinnersByDateAndCategory[$k]->created_at)){
                $continue = 'yes';
            }   
        }
        if($continue == 'yes'){
            continue;
        }
        if(($matched != 'yes')){
            array_push($sorted_array,['date'=>$WinnersByDateAndCategory[$k]->created_at,'values'=>[$WinnersByDateAndCategory[$k]]]);
        }

        
        }
        }
     }
//  echo "<pre>"; print_r($sorted_array);exit;

    $winners_lst = '<div class="gradient-bg">
    <div>SPIN AND</div>
    <div>WIN</div>
</div>';
    $winners_lst .='<h6 style="text-transform:uppercase;text-align:center;margin-top: 1%;"> CONTEST WINNERS - '.$selected_month.'  '.$selected_year.'</h6>';
   $winners_lst .='<div class="row">
   <div class="col-lg-3 col-3 head">Date</div>
   <div class="col-lg-3 col-3 head">Price</div>
   <div class="col-lg-3 col-3 head">Name</div>
   <div class="col-lg-3 col-3 head">Phone</div>
   </div>';
for($s=0;$s<count($sorted_array);$s++) {
    $winners_lst  .= '<div class="row">
    <div class="col-lg-3 col-xs-1 col-sm-1 inner_table col-3">'.$sorted_array[$s]['date'].'</div>
    <div class="col-lg-9 inner_table col-9">';

    for($v=0;$v<count($sorted_array[$s]['values']);$v++) {
    $winners_lst  .='<div class="row">
    <div class="col-lg-4 col-4 inner_table1 "> '.$sorted_array[$s]['values'][$v]->contest_name.'</div>
    <div class="col-lg-4 col-4 inner_table1">'.$sorted_array[$s]['values'][$v]->name.'</div>
    <div class="col-lg-4 col-4 inner_table1">'.$sorted_array[$s]['values'][$v]->member_id.'</div>
    </div>';
    }
    
    $winners_lst  .=  '</div></div>';
}

$winners_lst .= "</tbody></tfoot>
</table>";

echo $winners_lst;
}





  
     public function viewWinners() {
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $id = $this->uri->segment('3');
        $data['winners_info_by_id'] = $this->Contest_winners_model->getWinnersInfoById($id);
        $this->load->view('contest_winners/view_winners',$data);
     }
     

  
    
     public function deleteWinner() { 
        $id = $this->input->post('delete_id');
        $this->Contest_winners_model->deleteWinner($id,$contest_id);
        $this->session->set_flashdata('delete_success','Record deleted successfully');
        redirect('ContestWinners');
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
            $this->Contest_winners_model->updateWinner($id);
            $this->session->set_flashdata('email-success','Email has been sent successfully.');
            redirect('ContestWinners');
        } else {
            echo 'Error sending email.';
            $this->Contest_winners_model->updateWinner($id);
            $this->session->set_flashdata('email-error','Error in sending email.Please try again.');
            redirect('ContestWinners');
            // print_r($this->email->print_debugger());
        }
     }

     public function getMonthAndDate(){
        $category_type = $this->input->get('category_type');
        $category_info = $this->Contest_winners_model->getCategoryByCategoryId($category_type);
        $html = '<option value="" >Select Month</option>';
        foreach($category_info as $category){
            $html .= "<option value=$category->month>$category->month</option>";
        }
        echo  $html;
    }

    public function getYear(){
        $month = $this->input->get('month');
        $year_info = $this->Contest_winners_model->getYearByMonth($month);
        $html = '<option value="" >Select Year</option>';
        foreach($year_info as $year){
            $html .= "<option value=$year->year>$year->year</option>";
        }
        echo  $html;
    }

}

?>