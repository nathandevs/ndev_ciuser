<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Food extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{		
		if($this->session->userdata('username') != ""){
			
			$data = array(
				'title'				=> "Food & Drink",
				'content_title'		=> "Food & Drink"
			);
				
			$page_array = $this->content_page_model->get_page('c_food');
		
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}	

		}else{
			redirect(site_url());
		}
	}
	
	
	//=============================================
	// INSERT DATA
	//=============================================	
	public function addfood()
	{
		$data = array(
			'title'				=> "Food & Drink",
			'content_title'		=> "Food & Drink"
		);
			
		$page_array = $this->content_page_model->get_page('c_addfood');
		
		foreach($page_array as $page){
			$this->load->view($page, $data);
		}	
	}
	
}
