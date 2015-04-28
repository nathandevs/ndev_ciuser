<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
        parent::__construct();
		
    }
	

	public function index($msg = null){		
		
		if($this->session->userdata('username') != ""){			
			redirect('dashboard');
			
		}else{
		
			//set user to offline
			$un = null;
			$this->update_model->upd_user_status('Offline', $un);
		
			//Set user time login
			//insert date and time to adminlogs table
			$this->update_model->user_timestamp($un);
			
			$data = array(
				'title'				=> "Login",
				'error_msg'			=> $msg
			);
			
			$this->load->view('header', $data);
			$this->load->view('c_login', $data);
			
		}
	}

	
	public function attempt_login(){	
		
		//get user input
		$un = $this->input->post('username');
		$ps = md5($this->input->post('password'));
		
		
        // Validate the user can login
        $result = $this->login_model->validate_user($un, $ps);
	
		
		if ($this->form_validation->run('login') == FALSE || !$result )
		{
			
			if(empty($un) || empty($ps)){
				$msg = "Username and Password is required!";
			}else{				
				$msg = "Username and Password not match!";				
			}
			
			$this->index($msg);
			
		}else{
			//update user status set to Online
			$this->update_model->upd_user_status('Online', $un);
			
			//Set user time login
			//insert date and time to adminlogs table
			$this->insert_model->user_timestamp($un);
		
			redirect('dashboard');			
		}	
	}

	
}
