<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct(){
		parent::__construct();
	}

	public function index()
	{
		if($this->session->userdata('username') != ""){
			
			$data = array(
				'title'				=> "Dashboard",
				'content_title'		=> "Dashboard"
			);
			
			$page_array = $this->content_page_model->get_page('c_dashboard');
			
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}	
		}else{
			redirect(site_url());
		}
	}
	
}
