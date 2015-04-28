<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {

	function __construct(){
        parent::__construct();
    }
	

	public function index(){
		//set user to offline
		$un = $this->session->userdata('username');
		$this->update_model->upd_user_status('Offline', $un);
	
		//Set user time login
		//insert date and time to adminlogs table
		$this->update_model->user_timestamp($un);
		
		//unset all session
		$this->session->sess_destroy();
		redirect(site_url());
	}
	
}
