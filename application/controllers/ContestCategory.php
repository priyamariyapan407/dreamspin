<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ContestCategory extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Contest_category_model');
        $this->load->library('form_validation');
    }

    public function index(){
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $data['contest_cat_info'] = $this->Contest_category_model->getAllCategoryContestDetails();
        $this->load->view('contest_category/index',$data);
    }
    public function createCategory(){
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $data['spin_info'] = $this->Contest_category_model->getAllSpinDetails();
        $this->load->view('contest_category/createCategory',$data);
    }
    
    

    public function storeCategory(){
        if(!empty($this->input->post('spin_id')) && !empty($this->input->post('category_contest_name'))){
            $IsDuplicate = $this->Contest_category_model->checkDuplicateCategory($this->input->post('category_contest_name'),$this->input->post('spin_id'));
        }
       
        $this->form_validation->set_rules('category_contest_name','Contest Category Name','required');
        $this->form_validation->set_rules('spin_id','Spin Type','required');
        $this->form_validation->set_rules('status_value','Status','required');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('category_contest_name',$this->input->post('category_contest_name'));
            $this->session->set_flashdata('spin_id',$this->input->post('spin_id'));
            $this->session->set_flashdata('status_value',$this->input->post('status_value'));
            $this->session->set_flashdata('add_contest_category_error',validation_errors());
            redirect('ContestCategory/createCategory');
       
        } else if ( $IsDuplicate == TRUE){
            $this->session->set_flashdata('add_contest_category_error','Duplicate Record');
            redirect('ContestCategory/createCategory');
        } else {
        $data['contest_category_name'] = $this->input->post('category_contest_name');
        $data['spin_id'] = $this->input->post('spin_id');
        $data['contest_category_status'] = $this->input->post('status_value');
        $this->Contest_category_model->storeCategory($data);
        $this->session->set_flashdata('add_contest_category_success','Record added successfully');
        redirect('ContestCategory');
    }
    }

    public function updatecategory() {
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $id = $this->uri->segment('3');
        $data['category_info_by_id'] = $this->Contest_category_model->getAllCatInfoById($id);
        $data['spin_info'] = $this->Contest_category_model->getAllSpinDetails();
        $this->load->view('contest_category/updatecategory',$data);
     }
     public function viewcategory() {
        $logged_in = $this->session->userdata('logged_in');

        if (!($logged_in)) {
            redirect(base_url('/'));
        }
        $id = $this->uri->segment('3');
        $data['category_info_by_id'] = $this->Contest_category_model->getAllCatInfoById($id);
        $data['spin_info'] = $this->Contest_category_model->getAllSpinDetails();
        $this->load->view('contest_category/viewcategory',$data);
     }
     

     public function updatecategoryDetails() {
        // $edit_record_id = $this->uri->segment('3');
        $cat_id = $this->input->post('contest_category_id');
        $IsDuplicate = $this->Contest_category_model->checkDuplicateCategory($this->input->post('category_contest_name'));
        $this->form_validation->set_rules('category_contest_name','Contest Category Name','required');
        $this->form_validation->set_rules('spin_id','Spin Type','required');
        $this->form_validation->set_rules('status_value','Status','required');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('edit_contest_category_error',validation_errors());
            redirect('ContestCategory/updatecategory/'. $cat_id );
       
        }  else {
        $data['contest_category_name'] = $this->input->post('category_contest_name');
        $data['contest_category_status'] = $this->input->post('status_value');
        $data['spin_id'] = $this->input->post('spin_id');
        $this->Contest_category_model->saveCategory($data,$cat_id);
        $this->session->set_flashdata('edit_contest_category_success','Record edited successfully');
        redirect('ContestCategory');
        }
     }

    
     public function deleteCategory() {
        $id = $this->input->post('delete_id');
        $this->Contest_category_model->deletecategory($id);
        $this->session->set_flashdata('delete_success','Record deleted successfully');
        redirect('ContestCategory');
     }

}

?>