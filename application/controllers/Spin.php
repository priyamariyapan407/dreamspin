<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Spin_model');
    }

    public function index(){
        $logged_in = $this->session->userdata('logged_in');
		if (!($logged_in)) {
			redirect(base_url('/'));
		}
        $data['spin_info'] = $this->Spin_model->getAllSpinDetails();
        $this->load->view('spin/index',$data);
    }
    public function createSpin(){
        $this->load->view('spin/create');
    }

    public function storeSpin(){

        $IsDuplicate = $this->Spin_model->duplicateSpinCheck($this->input->post('spin_type_name'));
        if(($this->input->post('spin_type_name')) == ''){
            $this->session->set_flashdata('add_spin_error','Please enter spin type');
        } else if (($IsDuplicate) == TRUE){
            $this->session->set_flashdata('add_spin_error','Duplicate record');
        } else {
            $data['spin_type_name'] = $this->input->post('spin_type_name');
            $this->Spin_model->storeSpin($data);
            $this->session->set_flashdata('add_spin_success','Record added successflly');
        }
        redirect('Spin');
    }


    public function updatespin() {
        $IsDuplicate = $this->Spin_model->duplicateSpinCheck($this->input->post('new_spin_name'));
        $id = $this->input->post('spin_id');
        if( $this->input->post('new_spin_name') == ''){
            $this->session->set_flashdata('edit_spin_id', $id);
            $this->session->set_flashdata('edit_spin_error','Please enter spin type to update');
        } else if (($IsDuplicate) == TRUE){
            $this->session->set_flashdata('edit_spin_id', $id);
            $this->session->set_flashdata('edit_spin_error','Duplicate record');
        } else {
            $new_spin_name = $this->input->post('new_spin_name');
            $this->Spin_model->updateSpinInfo($id,$new_spin_name);
            $this->session->set_flashdata('edit_spin_success','Record edited successflly');
        }
        redirect('Spin');
     }

     public function deletespin() {
        $id = $this->input->post('delete_id');
        $this->Spin_model->deletespin($id);
        $this->session->set_flashdata('delete_record','Record deleted successfully');
        redirect('Spin');
     }

}

?>