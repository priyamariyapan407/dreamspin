<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
		$this->load->library('form_validation');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function dashboard()
	{
		$logged_in = $this->session->userdata('logged_in');

		if (!($logged_in)) {
			redirect(base_url('/'));
		}
		$data['users_count'] = $this->Admin_model->getUsersCount();
		$data['categories_count'] = $this->Admin_model->getcategoriesAndCounts();
		$data['chart_info'] = $this->Admin_model->getChartInfo();
		$this->load->view('dashboard',$data);
	}
	
	public function adminLogin()
	{
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$this->form_validation->set_rules('email','Email','required');
			$this->form_validation->set_rules('password','Password','required');
            
			if($this->form_validation->run() == true)
			{
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				// $data = array(
				// 	'email' => $email,
				// 	'password' => $password
				// )

				$this->load->model('Admin_model');
				$status = $this->Admin_model->checkPassword($email,$password);
				if($status != false){
					$email= $status->email;
					$password = $status->password;
				
				$session_data = array(
					'email' => $email,
					'password' => $password
				);
				// $this->session->set_admindata('admindata',$session_data);
				$this->session->set_userdata('logged_in', true);
				redirect(base_url('Welcome/dashboard'));
				} else {
					$this->session->set_flashdata('error','Email or password is wrong');
					redirect(base_url('/'));
				}
			} else {
				$this->session->set_flashdata('error','Fill all the required fields');
				redirect(base_url('/'));
			}


		}
	}
}