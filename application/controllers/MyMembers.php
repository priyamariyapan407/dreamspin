<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyMembers extends CI_Controller {

public function __construct(){
parent::__construct();
$this->load->model('My_members_model');
$this->load->library('form_validation');
}

public function index(){
$logged_in = $this->session->userdata('logged_in');

if (!($logged_in)) {
    redirect(base_url('/'));
}
$data['my_members_info'] = $this->My_members_model->getAllMyMembersDetails();
$this->load->view('my_members/index',$data);
}



public function storeMembers(){
$date = date('Y-m-d');
$data['member_name'] = $this->input->post('member_name');
$data['member_id'] = $this->input->post('member_id');
$data['street'] = $this->input->post('street');
$data['area'] = $this->input->post('area');
$data['country'] = $this->input->post('country');
$data['state'] = $this->input->post('state');
$data['city'] = $this->input->post('city');
$data['pincode'] = $this->input->post('pincode');
$data['first_name'] = $this->input->post('first_name');
$data['last_name'] = $this->input->post('last_name');
$data['mobile_no'] = $this->input->post('mobile_no');
$data['email_id'] = $this->input->post('email_id');
$data['dob'] = $this->input->post('dob');
$data['referal_code'] = $this->input->post('referal_code');
$data['status'] = $this->input->post('status');

$data['gender'] = $this->input->post('gender');
$data['created_at'] = $date;

        $result = $this->My_members_model->storeMembers($data);
        // echo $result;
        if(($result) != FALSE){
            $response['status'] = '200';
            $response['message'] = 'Sign up success!';
            $response['data'] = array(
                'id' => $this->input->post('member_id'),
            );
          echo  json_encode( $response,JSON_UNESCAPED_SLASHES);
        } else {
            $response['status'] = '400';
            $response['message'] = 'Sign up failed!';
            $response['data'] = array();
          echo  json_encode( $response,JSON_UNESCAPED_SLASHES);
        }
        
}


public function checkForExistingUser(){
    $country_code = strlen($this->input->post('country_code'));

    $mobile_number = $this->input->post('member_id');
    $mob_number =substr($mobile_number, $country_code);
    $member_info = $this->My_members_model->getMemberInfo($mob_number);
    if(!empty($member_info)){
        $country = $this->My_members_model->getCountry($member_info[0]->country);
        $country_name = $country[0]->country_name;
        $state = $this->My_members_model->getState($member_info[0]->state);
        $state_name = $state[0]->state_name;
        $city = $this->My_members_model->getCity($member_info[0]->city);
        $city_name = $city[0]->city_name;
        //  echo "<pre>"; print_r($member_info);exit;
        $response = array(
            'status'=>'200',
            "message"=> "user exists",
            "data" => array(
                "id" => $member_info[0]->member_id,
                "first_name" => $member_info[0]->first_name,
                "first_name"=> $member_info[0]->first_name,
                "street" => $member_info[0]->street,
                "area" => $member_info[0]->area,
                "country" => $country_name,
                "state" => $state_name,
                "city" => $city_name,
                "pincode" => $member_info[0]->pincode
            )
            );
         echo json_encode($response,JSON_UNESCAPED_SLASHES);
    } else {

        $response = array(
            'status'=>'400',
            "message"=> "user not exists",
            "data" =>null
            );
         echo json_encode($response,JSON_UNESCAPED_SLASHES);
    }
   
}

public function updatemember() {
$logged_in = $this->session->userdata('logged_in');

if (!($logged_in)) {
    redirect(base_url('/'));
}
$id = $this->uri->segment('3');
$data['member_info_by_id'] = $this->My_members_model->getMyMemberById($id);
$data['country_list'] = $this->My_members_model->getCountryList();
$data['state_list'] = $this->My_members_model->getStateList();
$data['city_list'] = $this->My_members_model->getCityList();
//  echo "<pre>"; print_r($data['state_list']);exit; 
$this->load->view('my_members/updatemember',$data);
}
public function viewmember() {
$logged_in = $this->session->userdata('logged_in');

if (!($logged_in)) {
    redirect(base_url('/'));
}
$id = $this->uri->segment('3');
$data['member_info_by_id'] = $this->My_members_model->getMyMemberById($id);
$this->load->view('my_members/viewmember',$data);
}


public function updateMemberDetails() {
            $member_id = $this->uri->segment('3');
            $old_member_image = $this->input->post('old_member_image');
            $new_member_image = $_FILES['new_member_image']['name'];


        if($new_member_image == TRUE){
           $update_file_name = time().'-'.str_replace(' ','-',$new_member_image);
       
            $config['upload_path'] = './images/';
            $config['allowed_types'] = 'jpg|png|jpeg|pdf';
            $config['file_name'] = $update_file_name;
           $this->load->library('upload',$config);
          
           if($this->upload->do_upload('new_member_image')){     
            if(file_exists('./images/'.$old_member_image)){
                unlink('./images/'.$old_member_image);
                
            }
           } else {
           $errors = $this->upload->display_errors();
          
           }
        } else {
            $update_file_name = $old_member_image;
        }
        // $IsDuplicate = $this->Contest_category_model->checkDuplicateCategory($this->input->post('category_contest_name'));
        $this->form_validation->set_rules('member_name','member name','required');
        $this->form_validation->set_rules('street','street','required');
        $this->form_validation->set_rules('area','area','required');
        $this->form_validation->set_rules('country','country','required');
        $this->form_validation->set_rules('state','state','required');
        $this->form_validation->set_rules('city','city','required');
        $this->form_validation->set_rules('pincode','pincode','required');
        $this->form_validation->set_rules('first_name','first name','required');
        $this->form_validation->set_rules('last_name','last name','required');
        $this->form_validation->set_rules('mobile_no','mobile number','required');
        $this->form_validation->set_rules('email_id','email id','required');
        // $this->form_validation->set_rules('email_id','email id','valid_email');
        // $this->form_validation->set_rules('dob','dob','required');
        $this->form_validation->set_rules('referal_code','referal code','required');
        $this->form_validation->set_rules('status','status','required');
       
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('edit_my_member_error',validation_errors());
            // echo validation_errors(); exit;
             redirect('MyMembers/updatemember/'. $member_id );
       
        } else if(!empty($errors)){
            $this->session->set_flashdata('image_upload_error',$errors);
            redirect('MyMembers/updatemember/'. $member_id );
        } else {
        $data['member_name'] = $this->input->post('member_name');
        $data['street'] = $this->input->post('street');
        $data['area'] = $this->input->post('area');
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
        $data['pincode'] = $this->input->post('pincode');
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['mobile_no'] = $this->input->post('mobile_no');
        $data['email_id'] = $this->input->post('email_id');
        $data['dob'] = $this->input->post('dob');
        $data['referal_code'] = $this->input->post('referal_code');
        $data['status'] = $this->input->post('status');
        if(!empty($update_file_name)){
            $data['member_photo'] = $update_file_name;
        }
      
        $this->My_members_model->updatemembersdetails($data,$member_id);
        $this->session->set_flashdata('edit_my_member_success','Record edited successfully');
        redirect('MyMembers/viewmember/'. $member_id);
        }
     }

    
     public function deleteMember() {
        $id = $this->input->post('delete_id');
        $this->My_members_model->deleteMember($id);
        $this->session->set_flashdata('delete_success','Record deleted successfully');
        redirect('MyMembers');
     }

     public function getStateByCountryId(){
       $country_id = $this->input->post('selected_country');
       $state_info = $this->My_members_model->getStateByCntryId($country_id);
       $state = "<option value=''>Select state</option>";
       foreach($state_info as $value){
        $state .= "<option value=$value->state_id>$value->state_name</option>";
       }
       echo $state;
     }

     public function getcityByStateId(){
        $state_id = $this->input->post('selected_city');
        $city_info = $this->My_members_model->getCityByStateId($state_id);
        $city = "<option value=''>Select city</option>";
        foreach($city_info as $value){
         $city .= "<option value=$value->sn>$value->districtName</option>";
        }
        echo $city;
      }

}

?>