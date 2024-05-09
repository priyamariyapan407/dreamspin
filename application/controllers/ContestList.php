<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContestList extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Contest_list_model');
    }

    public function index(){
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }

        $data['contest_spin_info'] = $this->Contest_list_model->getAllSpinDetails();
        if(!empty($data['contest_spin_info'][0]->spin_id)){
            $data['contest_category_info'] = $this->Contest_list_model->getCategoryBySpinId($data['contest_spin_info'][0]->spin_id);
            $data['contest_list_info'] = $this->Contest_list_model->getContestListBySpinId($data['contest_spin_info'][0]->spin_id);
        }
       
        // echo "<pre>"; print_r($data['contest_list_info']);exit;
        $this->load->view('contest_list/index',$data);
    }
    public function createContestList(){
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $data['contest_category_info'] = $this->Contest_list_model->getAllCategoryContestDetails();
        $data['contest_spin_info'] = $this->Contest_list_model->getAllSpinDetails();
        $this->load->view('contest_list/createcontest',$data);
    }
    public function getCategoryBySpinId(){
        $selected_spin_id = $this->input->get('spin_id');
        $category_info = $this->Contest_list_model->getCategoryBySpinId($selected_spin_id);
        $html = '<option value="" >Please select category contest
        type</option>';
        foreach($category_info as $category){
            $html .= "<option value=$category->contest_category_id>$category->contest_category_name</option>";
        }
        echo  $html;
    }

    public function getCategoryAndListBySpinId(){
        $selected_spin_id = $this->input->get('spin_id');
        $category_info = $this->Contest_list_model->getCategoryBySpinId($selected_spin_id);
        $html = '<option value="" >Please select contest category
        type</option>';
        foreach($category_info as $category){
            $html .= "<option value=$category->contest_category_id>$category->contest_category_name</option>";
        }

        $contestlistBySpin = $this->Contest_list_model->getContestListBySpinId($selected_spin_id);

        $s_no =1;
        $contest_lst = '';   
                        
        foreach($contestlistBySpin as $contest_list) {
           
        

                                 
                                    $edit_del_num = 1; 
                                   for($j=1;$j<5;$j++){ 
                                 
                                       if($j == 1){
                                           $contest_name ='contest_name1';
                                           $status ='contest1_status';
                                       } else if ($j == 2){
                                           $contest_name ='contest_name2';
                                           $status ='contest2_status';
                                       } else if ($j == 3){
                                           $contest_name ='contest_name3';
                                           $status ='contest3_status';
                                       } else {
                                           $contest_name ='contest_name4';
                                           $status ='contest4_status';
                                       }
                                 if(($contest_list->$status) == 1){
                                    $status_btn = '<div class="row" style="height: 100%;">
                                    <div class="col-lg-4 status"><i class="fa fa-check" style="    color: #17a2b8;"></i></div>
                                    <div class="col-lg-5 status"><button type="button" class="btn btn-info btn-block btn-flat">Active</button></div>
                                    </div>';
                                                                    } else {
                                    $status_btn = '<div class="row" style="height: 100%;">
                                    <div class="col-lg-4 status"><i class="fa fa-times" style="    color: #dc3545;"></i></div>
                                    <div class="col-lg-5 status"><button type="button" class="btn btn-danger btn-block btn-flat">Inactive</button></div>
                                    </div>';
                                 }
                                 $edit_url = base_url('ContestList/updateContestList/'.$contest_list->contest_id.'/'.$edit_del_num );
                              
                                 if(!empty($contest_list->$contest_name)){ 
                                  
                                    $contest_lst  .= '<tr>
                                    <td>  '.$s_no.' </td>
                                    
                                    <td>'.$contest_list->$contest_name.'</td>
                                    <td>'.$status_btn.'</td>
                                    <td>
                                    <span style="margin: 2%;">
                                    <a style="color:#000 !important"
                                    href='.$edit_url.'><span
                                    class="fas fa-edit"></span></a></span>
                                    <span style="margin: 2%;">
                                    <span style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#delete_contest"
                                    onclick="deleteContestById('.$contest_list->contest_id.', '.$edit_del_num.')">
                                    <span class="fa fa-trash"></span></span>

</span>

</td>
                                    </tr>';

$s_no ++; } $edit_del_num++; }


}

// echo "<pre>";print_r($contest_lst);
echo $html .'::'.$contest_lst;
}


public function getContestListBySpinIdAndCatId(){
    $selected_spin_id = $this->input->get('selected_spin_id');
    $selected_cat_id = $this->input->get('selected_cat_id');
  
    $contestlistBySpinAndCategory = $this->Contest_list_model->getContestListBySpinIdAndCatId($selected_spin_id,$selected_cat_id);

    $s_no =1;
    $contest_lst = '';   
    $contents_lst = array();
    foreach($contestlistBySpinAndCategory as $contest_list) {
       
    

                             
                                $edit_del_num = 1; 
                               for($j=1;$j<5;$j++){ 
                             
                                   if($j == 1){
                                       $contest_name ='contest_name1';
                                       $status ='contest1_status';
                                   } else if ($j == 2){
                                       $contest_name ='contest_name2';
                                       $status ='contest2_status';
                                   } else if ($j == 3){
                                       $contest_name ='contest_name3';
                                       $status ='contest3_status';
                                   } else {
                                       $contest_name ='contest_name4';
                                       $status ='contest4_status';
                                   }
                             if(($contest_list->$status) == 1){
                                $status_btn = '<div class="row" style="height: 100%;">
                                <div class="col-lg-4 status"><i class="fa fa-check" style="    color: #17a2b8;"></i></div>
                                <div class="col-lg-5 status"><button type="button" class="btn btn-info btn-block btn-flat">Active</button></div>
                                </div>';
                            } else {
                                $status_btn = '<div class="row" style="height: 100%;">
                                <div class="col-lg-4 status"><i class="fa fa-times" style="    color: #dc3545;"></i></div>
                                <div class="col-lg-5 status"><button type="button" class="btn btn-danger btn-block btn-flat">Inactive</button></div>
                                </div>';
                             }
                             $edit_url = base_url('ContestList/updateContestList/'.$contest_list->contest_id.'/'.$edit_del_num );
                             
                             if(!empty($contest_list->$contest_name)){ 
                                if(($contest_list->$status) == 1){
                                   array_push($contents_lst,$contest_list->$contest_name);
                                }
                                $contest_lst  .= '<tr>
                                <td>  '.$s_no.' </td>
                                
                                <td>'.$contest_list->$contest_name.'</td>
                                <td>'.$status_btn.'</td>
                                <td>
                                <span style="margin: 2%;">
                                <a style="color:#000 !important"
                                href='.$edit_url.'><span
                                class="fas fa-edit"></span></a></span>
                                <span style="margin: 2%;">
                                <span style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#delete_contest"
                                onclick="deleteContestById('.$contest_list->contest_id.', '.$edit_del_num.')">
                                <span class="fa fa-trash"></span></span>

</span>

</td>
                                </tr>';

$s_no ++; } $edit_del_num++; }


}

 echo $contest_lst. '::' . json_encode($contents_lst);
}


    public function storeContestList(){
        if(!empty(($this->input->post('spin_id') && $this->input->post('category_id') ))){
            $getContestId = $this->Contest_list_model->getContestId( $this->input->post('spin_id'),$this->input->post('category_id'));
            //   echo "<pre>"; print_r($getContestId);exit;
            $Is_contest1_available = $this->Contest_list_model->checkDuplicateContestList( $this->input->post('spin_id'),$this->input->post('category_id'),'contest_name1');
            $Is_contest2_available = $this->Contest_list_model->checkDuplicateContestList( $this->input->post('spin_id'),$this->input->post('category_id'),'contest_name2');
            $Is_contest3_available = $this->Contest_list_model->checkDuplicateContestList( $this->input->post('spin_id'),$this->input->post('category_id'),'contest_name3');
          
            $Is_contest4_available = $this->Contest_list_model->checkDuplicateContestList( $this->input->post('spin_id'),$this->input->post('category_id'),'contest_name4');
            $Has_all_contents = $this->Contest_list_model->checkconlst( $this->input->post('spin_id'),$this->input->post('category_id'));
            $Has_Filled_contents = $this->Contest_list_model->checkFilledConLst( $this->input->post('spin_id'),$this->input->post('category_id'));
            if((($this->input->post('contest_name1') != '') && !empty($getContestId))){
                $content1_duprecord =  $this->Contest_list_model->getDuplicateContent($getContestId,$this->input->post('contest_name1'));
            }
            if((($this->input->post('contest_name2') != '') && !empty($getContestId))){
                $content2_duprecord =  $this->Contest_list_model->getDuplicateContent($getContestId,$this->input->post('contest_name2'));
             }
             if((($this->input->post('contest_name3') != '') && !empty($getContestId))){
                $content3_duprecord =  $this->Contest_list_model->getDuplicateContent($getContestId,$this->input->post('contest_name3'));
             }
             if(( ($this->input->post('contest_name4') != '') && !empty($getContestId))){
                $content4_duprecord =  $this->Contest_list_model->getDuplicateContent($getContestId,$this->input->post('contest_name4'));
             }
            $contest_name1 = FALSE;
            $contest_name2 = FALSE;
            $contest_name3 = FALSE;
            $contest_name4 = FALSE;
            // echo "<pre>"; print_r($Has_Filled_contents);exit;
            if(!empty($Has_Filled_contents)){
                for($s=0;$s<count($Has_Filled_contents);$s++){
                    if($Has_Filled_contents[$s] == 'contest name1'){
                        $contest_name1 = TRUE;
                    } else if($Has_Filled_contents[$s] == 'contest name2'){
                        $contest_name2 = TRUE;
                    } else if($Has_Filled_contents[$s] == 'contest name3'){
                        $contest_name3 = TRUE;
                    } else if($Has_Filled_contents[$s] == 'contest name4'){
                        $contest_name4 = TRUE;
                    }
                }
            }
            $duplicate_current_contest_name4 = FALSE;
            $duplicate_current_contest_name3 = FALSE;
            $duplicate_current_contest_name2 = FALSE;
          
        }
        if(($this->input->post('contest_name4') != '') || ($this->input->post('contest_name3') != '') || ($this->input->post('contest_name2') != '') || ($this->input->post('contest_name1') != '')){
            
            if(!empty($this->input->post('contest_name4'))){
                if(($this->input->post('contest_name4') == ($this->input->post('contest_name1')) || ( $this->input->post('contest_name4') == $this->input->post('contest_name2')) || ( $this->input->post('contest_name4') == $this->input->post('contest_name3')) ) ) {
                    $duplicate_current_contest_name4  = TRUE;
                }
            }
           
            if(!empty($this->input->post('contest_name3'))){
            if(($this->input->post('contest_name3') == ($this->input->post('contest_name1')) || ( $this->input->post('contest_name3') == $this->input->post('contest_name2')) || ( $this->input->post('contest_name3') == $this->input->post('contest_name4')) )){
                $duplicate_current_contest_name3  = TRUE;
            }
        }
       
            if(!empty($this->input->post('contest_name2'))){
                if($this->input->post('contest_name2') == ($this->input->post('contest_name1')) || ( $this->input->post('contest_name2') == $this->input->post('contest_name3')) || ( $this->input->post('contest_name2') == $this->input->post('contest_name4')) ){
                    $duplicate_current_contest_name2  = TRUE;
                }
            }
        }
    
        $this->form_validation->set_rules('spin_id','spin Type','required');
        $this->form_validation->set_rules('category_id','category Type','required');
        $this->form_validation->set_rules('contest_name1','contest1 name','required');
        $this->form_validation->set_rules('contest_name2','contest2 name','required');
        $this->form_validation->set_rules('contest_name3','contest3 name','required');
        $this->form_validation->set_rules('contest_name4','contest4 name','required');
        $this->form_validation->set_rules('start_date','start date','required');
        $this->form_validation->set_rules('end_date','end date','required');
        $this->form_validation->set_rules('play_mode','play mode','required');
        $this->form_validation->set_rules('join_fee','Join fee','required');
        $this->form_validation->set_rules('max_add','maximum add','required');
        
       if(($this->input->post('category_id') == '') || ($this->input->post('category_id') == '')){
            $this->session->set_flashdata('spin_category_type_error','Please select spin and category type');
            $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
            $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
            $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
            $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
            
            $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
            $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
            $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
            $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
            $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));

            redirect('ContestList/createContestList');
        } else if($Has_all_contents == TRUE){
            $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
            $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
            $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
            $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
            $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
            $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
            $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
            $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
            $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
            $this->session->set_flashdata('add_non_empty_contestlist_error','All the contests are already added for the selected category');
            redirect('ContestList/createContestList');
        } else if(($contest_name1 == TRUE && ($this->input->post('contest_name1') == '')) || ($contest_name2 == TRUE && ($this->input->post('contest_name2') == '')) || ($contest_name3 == TRUE && ($this->input->post('contest_name3') == '')) || ($contest_name4 == TRUE && ($this->input->post('contest_name4') == '') || ($Is_contest1_available == TRUE && ($this->input->post('contest_name1') != ''))  || ($Is_contest2_available == TRUE && ($this->input->post('contest_name2') != '')) || ($Is_contest3_available == TRUE && ($this->input->post('contest_name3') != '')) || ($Is_contest4_available == TRUE && ($this->input->post('contest_name4') != '')))){
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
            $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
            $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
            $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
            $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
            $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
            $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
            $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
            $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
            $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
            $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
           
            if( $contest_name1 == TRUE) {
                $this->session->set_flashdata('contest_name1_empty_indicator','This contest is empty for the selected category, Please add');
                $this->session->set_flashdata('contest_name1_status_empty_indicator','Please select status');
            } 
            if( $contest_name2 == TRUE) {
                $this->session->set_flashdata('contest_name2_empty_indicator','This contest is empty for the selected category, Please add');
                $this->session->set_flashdata('contest_name2_status_empty_indicator','Please select status');
            }
            if( $contest_name3 == TRUE) {
                $this->session->set_flashdata('contest_name3_empty_indicator','This contest is empty for the selected category, Please add');
                $this->session->set_flashdata('contest_name3_status_empty_indicator','Please select status');
            }
            if( $contest_name4 == TRUE) {
                $this->session->set_flashdata('contest_name4_empty_indicator','This contest is empty for the selected category, Please add');
                $this->session->set_flashdata('contest_name4_status_empty_indicator','Please select status');
            }
            if( $Is_contest1_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest2_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest3_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest4_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
            }
            redirect('ContestList/createContestList');
        } else if(!empty($content1_duprecord)){
                    
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
                $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
                $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
                $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
                $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
                $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
                $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
                $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
                $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
                $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
                $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
              
                if( $Is_contest1_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest2_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest3_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest4_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
                }
            $this->session->set_flashdata('duplicate_contest1','Duplicate Contest');
            $this->session->set_flashdata('contest_name1_status_empty_indicator','Please select status');
            redirect('ContestList/createContestList');
         } else if(!empty($content2_duprecord)){
                    
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
                $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
                $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
                $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
                $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
                $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
                $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
                $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
                $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
                $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
                $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
              
                if( $Is_contest1_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest2_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest3_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest4_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
                }
            $this->session->set_flashdata('duplicate_contest2','Duplicate Contest');
            $this->session->set_flashdata('contest_name2_status_empty_indicator','Please select status');
            redirect('ContestList/createContestList');
         } else if(!empty($content3_duprecord)){
                    
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
                $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
                $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
                $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
                $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
                $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
                $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
                $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
                $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
                $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
                $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
             
                if( $Is_contest1_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest2_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest3_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest4_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
                }
            $this->session->set_flashdata('duplicate_contest3','Duplicate Contest');
                $this->session->set_flashdata('contest_name3_status_empty_indicator','Please select status');
            redirect('ContestList/createContestList');
         }  else if(!empty($content4_duprecord)){
                    
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
                $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
                $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
                $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
                $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
                $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
                $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
                $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
                $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
                $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
                $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
             
                if( $Is_contest1_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest2_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest3_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
                }
                if( $Is_contest4_available == TRUE ) {
                    $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
                }
            $this->session->set_flashdata('duplicate_contest4','Duplicate Contest');
            $this->session->set_flashdata('contest_name4_status_empty_indicator','Please select status');
            redirect('ContestList/createContestList');
         } else if ($duplicate_current_contest_name4 == TRUE){
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
            $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
            $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
            $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
            $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
            $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
            $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
            $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
            $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
            $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
            $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
            if( $Is_contest1_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest2_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest3_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest4_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
            }
            $this->session->set_flashdata('duplicate_contest4','Duplicate Contest4'); 
            redirect('ContestList/createContestList');
        } else if ($duplicate_current_contest_name3 == TRUE){
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
            $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
            $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
            $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
            $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
            $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
            $this->session->set_flashdata('duplicate_contest3','Duplicate Contest3'); 
            $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
            $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
            $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
            $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
            $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));

            if( $Is_contest1_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest2_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest3_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest4_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
            }
            redirect('ContestList/createContestList');
        } else if ($duplicate_current_contest_name2 == TRUE){
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
            $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
            $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
            $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
            $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
            $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
            $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
            $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
            $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
            $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
            $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));

            if( $Is_contest1_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error1','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest2_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error2','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest3_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error3','This contest is already added for the selected category, Please ignore.');
            }
            if( $Is_contest4_available == TRUE ) {
                $this->session->set_flashdata('add_contest_list_error4','This contest is already added for the selected category, Please ignore.');
            }
            $this->session->set_flashdata('duplicate_contest2','Duplicate Contest2'); 
            redirect('ContestList/createContestList');
      
        
        } else if((empty($getContestId)) && ($this->form_validation->run()) == FALSE){
            $this->session->set_flashdata('selected_spin_id',$this->input->post('spin_id'));
            $this->session->set_flashdata('selected_category_id',$this->input->post('category_id'));
            $this->session->set_flashdata('current_contest_name1',$this->input->post('contest_name1'));
            $this->session->set_flashdata('current_contest_name2',$this->input->post('contest_name2'));
            $this->session->set_flashdata('current_contest_name3',$this->input->post('contest_name3'));
            $this->session->set_flashdata('current_contest_name4',$this->input->post('contest_name4'));
            $this->session->set_flashdata('current_start_date',$this->input->post('start_date'));
            $this->session->set_flashdata('current_end_date',$this->input->post('end_date'));
            $this->session->set_flashdata('current_play_mode',$this->input->post('play_mode'));
            $this->session->set_flashdata('current_join_fee',$this->input->post('join_fee'));
            $this->session->set_flashdata('current_max_add',$this->input->post('max_add'));
        
            $this->session->set_flashdata('add_contest_list_error',validation_errors());
             redirect('ContestList/createContestList');
          } else {
       
        if(!empty($getContestId)){
            if($contest_name1 == TRUE){
                $this->Contest_list_model->updatecontentlist($getContestId,1,$this->input->post('contest_name1'));
            }
            if($contest_name2 == TRUE){
                $this->Contest_list_model->updatecontentlist($getContestId,2,$this->input->post('contest_name2'));
            }
            if($contest_name3 == TRUE){
                $this->Contest_list_model->updatecontentlist($getContestId,3,$this->input->post('contest_name3'));
            }
            if($contest_name4 == TRUE){
                $this->Contest_list_model->updatecontentlist($getContestId,4,$this->input->post('contest_name4'));
            }
        } else {
            $data['contest_name1'] = $this->input->post('contest_name1');
            $data['contest_name2'] = $this->input->post('contest_name2');
            $data['contest_name3'] = $this->input->post('contest_name3');
            $data['contest_name4'] = $this->input->post('contest_name4');
            $data['contest1_status'] = $this->input->post('contest1_status');
            $data['contest2_status'] = $this->input->post('contest2_status');
            $data['contest3_status'] = $this->input->post('contest3_status');
            $data['contest4_status'] = $this->input->post('contest4_status');
            $data['contest_category_id'] = $this->input->post('category_id');
            $cate_name = $this->Contest_list_model->getCatName($this->input->post('category_id'));
            if(!empty($cate_name[0]->contest_category_name)){
                $data['contest_category_name'] = $cate_name[0]->contest_category_name;
            }
            // echo "<pre>";print_r($cate_name);exit;
            $data['start_date'] = $this->input->post('start_date');
            $data['end_date'] = $this->input->post('end_date');
            $data['play_mode'] = $this->input->post('play_mode');
            $data['join_fee'] = $this->input->post('join_fee');
            $data['max_add'] = $this->input->post('max_add');
            $data['spin_id'] = $this->input->post('spin_id');
           
            $this->Contest_list_model->storeContest($data);
        }
        $this->session->set_flashdata('add_contest_list_success','Record added successfully');
        redirect('ContestList');
        }
    }


    public function updateContestList() {
    $logged_in = $this->session->userdata('logged_in');

    if (!($logged_in)) {
        redirect(base_url('/'));
    }
    $id = $this->uri->segment('3');
    $content = $this->uri->segment('4');
    $data['content_list_info_by_id'] = $this->Contest_list_model->getAllCatContInfoById($id,$content);

        // $data['spin_info'] = $this->Contest_list_model->getAllSpinDetails();
        $this->load->view('contest_list/updatecontestlist',$data);
     }
    //  public function viewcategory() {
    //     $id = $this->uri->segment('3');
    //     $data['category_info_by_id'] = $this->Contest_list_model->getAllCatInfoById($id);
    //     $data['spin_info'] = $this->Contest_list_model->getAllSpinDetails();
    //     $this->load->view('contest_category/viewcategory',$data);
    //  }
     

     public function updatecontentlist() { 
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $contest_name = $this->input->post('contest_name');
        $contest_position = $this->input->post('contest_position');
        $contest_status = $this->input->post('contest_status');
        $contest_id = $this->input->post('contest_id');
        echo $contest_position;
        echo '<br>';
        echo $contest_status;
        echo '<br>';
        echo $contest_id;
        // echo '<br>'; exit;
        
       
        $this->Contest_list_model->editcontentlist($contest_id,$contest_position,$contest_name,$contest_status);
        $this->session->set_flashdata('edit_contest_list_success','Record edited successfully');
        redirect('ContestList');
     }

    
     public function deleteContest() { 
        $id = $this->input->post('delete_id');
        $contest_id = $this->input->post('contest_id');
        $this->Contest_list_model->deleteContest($id,$contest_id);
        $this->session->set_flashdata('delete_success','Record deleted successfully');
        redirect('ContestList');
     }

}

?>