<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index(){
		if($this->session->userdata('user_name') == ""){
			$data['title'] = "Login";
			$this->load->view('header', $data);
			$this->load->view('login', $data);
			$this->load->view('footer', $data);
		}else{
			redirect('user/home');
		}
		
	}

	public function home(){
		if($this->session->userdata('logged_in') == TRUE){
			$data['title'] = "Home";
			$data['query'] = $this->user_model->fetchdadta();

			$this->load->view('header', $data);
			$this->load->view('home', $data);
			$this->load->view('footer', $data);
		}else{
			$this->index();
		}
		
	}

	public function login(){
		$un = $this->input->post('un');
		$ps = $this->input->post('pwd');

		$result = $this->user_model->login_model($un,$ps);

		if($result){
			redirect('user/home');
		}else{
			$this->index();
		}

	}

	public function logout(){
		$newdata = array(
			'user_id' 	=> "",
			'user_name'	=> "",
			'logged_in'	=> FALSE
		);
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		$this->index();
	}


	public function register(){
		$this->form_validation->set_rules('username', 'User Name', 'trim|required|xss_clean|callback_check_user');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]');
		
	
		if($this->form_validation->run('register') == FALSE || $this->check_user() == FALSE){
			$this->index();
		}else{
			$this->user_model->adduser();
			$this->index();
		}
	}


	public function check_user()
	{
      	$result = $this->user_model->check_un($this->input->post('username'));
        if($result)
		{
			$this->form_validation->set_message('check_user', ' The User name already exit.');
			return false;
		}
		else
		{
			return true;
		}
	}

}
    