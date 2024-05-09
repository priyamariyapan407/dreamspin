<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banners extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Banner_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $logged_in = $this->session->userdata('logged_in');
		if (!($logged_in)) {
			redirect(base_url('/'));
		}
        $data['banner_info'] = $this->Banner_model->getAllBannerDetails();
        $this->load->view('banners/index',$data);
    }
    public function createBanner(){
        $logged_in = $this->session->userdata('logged_in');
		if (!($logged_in)) {
			redirect(base_url('/'));
		}
        $this->load->view('banners/createBanner');
    }
    
    

    public function storeBanner(){
       
        $banner_image = $_FILES['banner_image']['name'];


    if($banner_image == TRUE){
       $update_file_name = time().'-'.str_replace(' ','-',$banner_image);
   
        $config['upload_path'] = './images/banner_images/';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $config['file_name'] = $update_file_name;
       $this->load->library('upload',$config);
      
       if($this->upload->do_upload('banner_image')){     
        // if(file_exists('./images/'.$old_member_image)){
        //     unlink('./images/'.$old_member_image);
            
        // }
       } else {
       $errors = $this->upload->display_errors();
      
       }
    } 
    // $IsDuplicate = $this->Contest_category_model->checkDuplicateCategory($this->input->post('category_contest_name'));
    $this->form_validation->set_rules('banner_name','banner name','required');
    // $this->form_validation->set_rules('banner_image','banner image','required');
    $this->form_validation->set_rules('status_value','status','required');
   
   
    if($this->form_validation->run() == FALSE || $banner_image == ''){
      
        $this->session->set_flashdata('banner_name',$this->input->post('banner_name'));
        $this->session->set_flashdata('status_value',$this->input->post('status_value'));
        $this->session->set_flashdata('create_banner_error',validation_errors());
        if($banner_image == ''){
            $this->session->set_flashdata('empty_banner_error','Please upload banner image');
        }
        // echo validation_errors(); exit;
         redirect('Banners/createBanner' );
   
    } else if(!empty($errors)){
        $this->session->set_flashdata('image_upload_error',$errors);
        redirect('Banners/createBanner' );
    } else {
    $data['banner_name'] = $this->input->post('banner_name');
   
    $data['status'] = $this->input->post('status_value');
    $data['created_at'] = date('Y-m-d');
    if(!empty($update_file_name)){
        $data['banner_image'] = $update_file_name;
    }
    // echo base_url().$data['banner_image'];exit;
    $data['banner_url'] = base_url().'images/banner_images/'.$data['banner_image'];
    $this->Banner_model->storebanner($data);
    $this->session->set_flashdata('add_banner_success','Record created successfully');
    redirect('Banners/index');
    }
    }

    public function updateBanner() {
        $logged_in = $this->session->userdata('logged_in');
		if (!($logged_in)) {
			redirect(base_url('/'));
		}
        $id = $this->uri->segment('3');
        $data['banner_info'] = $this->Banner_model->getBannerDetailsById( $id );
        // echo "<pre>"; print_r($data['banner_info']);exit;
        $this->load->view('banners/updateBanner',$data);
     }
     public function viewBanner() {
        $logged_in = $this->session->userdata('logged_in');
		if (!($logged_in)) {
			redirect(base_url('/'));
		}
        $id = $this->uri->segment('3');
        $data['banner_info'] = $this->Banner_model->getBannerDetailsById( $id );
        // echo "<pre>"; print_r($data['banner_info']);exit;
        $this->load->view('banners/viewBanner',$data);
     }
     

     public function updateBannerInfo() {
        // echo $this->input->post('status_value');exit;
        // $id = $this->uri->segment('3');
        // echo $id;exit;
        $id = $this->input->post('banner_id');
        $old_banner_image = $this->input->post('old_banner_image');
        $new_banner_image = $_FILES['new_banner_image']['name'];
        
        if($new_banner_image == TRUE){
            $update_file_name = time().'-'.str_replace(' ','-',$new_banner_image);
        
             $config['upload_path'] = './images/banner_images/';
             $config['allowed_types'] = 'jpg|png|jpeg|pdf';
             $config['file_name'] = $update_file_name;
            $this->load->library('upload',$config);
           
            if($this->upload->do_upload('new_banner_image')){     
             if(file_exists('./images/banner_images/'.$old_banner_image)){
                 unlink('./images/banner_images/'.$old_banner_image);
                 
             }
            } else {
            $errors = $this->upload->display_errors();
           
            }
         } else {
             $update_file_name = $old_banner_image;
         }
    
        $this->form_validation->set_rules('banner_name','banner name','required');
        $this->form_validation->set_rules('status_value','status','required');
       
       
        if($this->form_validation->run() == FALSE){
          
            $this->session->set_flashdata('banner_name',$this->input->post('banner_name'));
            $this->session->set_flashdata('status_value',$this->input->post('status_value'));
            $this->session->set_flashdata('create_banner_error',validation_errors());
        //   echo '1';exit;
             redirect('Banners/updateBanner/'.$id );
       
        } else if(!empty($errors)){
            $this->session->set_flashdata('image_upload_error',$errors);
            redirect('Banners/updateBanner/'.$id );
        } else {
        $data['banner_name'] = $this->input->post('banner_name');
        $data['status'] = $this->input->post('status_value');
        // $data['created_at'] = date('Y-m-d');
        
        if(!empty($update_file_name)){
            $data['banner_image'] = $update_file_name;
        }
      
        $this->Banner_model->updatebannerInfo($data,$id);
        $this->session->set_flashdata('edit_banner_success','Record edited successfully');
        redirect('Banners/index');
        }
        
     }

    
     public function deleteBanner() {
        $id = $this->input->post('delete_id');
        $this->Banner_model->deletebanner($id);
        $this->session->set_flashdata('delete_success','Record deleted successfully');
        redirect('Banners');
     }

     public function getDashboard() {
        $bannerLst = $this->Banner_model->getBannerLst();
        $spinLst = $this->Banner_model->getSpinLst();
     
        $spin_array = array();
        for($i=0;$i<count($spinLst);$i++){
            array_push($spin_array,$spinLst[$i]->spin_type_name);
            
        }
        $unique_spin = array_values(array_unique($spin_array));
        $spin_lst = array();
        for($j=0;$j<count($spinLst);$j++){
           
            for($k=0;$k<count($unique_spin);$k++){
              
         
             if($unique_spin[$k] == $spinLst[$j]->spin_type_name){
                $matched = '';
              
                for($p=0;$p<count($spin_lst);$p++){
                  
                    if($spin_lst[$p]['spin_type'] == $spinLst[$j]->spin_type_name){
                        array_push($spin_lst[$p]['category_type'], $spinLst[$j]);
                        $matched = 'yes';
                    }
                   
                }

                if($matched != 'yes') {
                    array_push($spin_lst,['spin_type' =>$spinLst[$j]->spin_type_name,'Title' =>$spinLst[$j]->spin_type_name,'category_type'=> [$spinLst[$j]]]);
                 }
               
             }
            
            }
        }
 
        //  echo "<pre>"; print_r($spin_lst);exit;
        $response['status'] = '200';
        $response['data'] = array(
            'banners' =>  $bannerLst,
            'spin'=> $spin_lst
        );
      echo json_encode( $response,JSON_UNESCAPED_SLASHES);
     }

}

?>