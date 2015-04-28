<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coupon extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{		
		if($this->session->userdata('username') != ""){
			
			$data = array(
				'title'				=> "Coupon",
				'content_title'		=> "Coupon"
			);
		
			$page_array = $this->content_page_model->get_page('c_coupon');
		
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
	public function addcoupon()
	{
		$data = array(
			'title'				=> "Coupon",
			'content_title'		=> "Coupon"
		);
	
		
		$page_array = $this->content_page_model->get_page('c_addcoupon');
		
		foreach($page_array as $page){
			$this->load->view($page, $data);
		}	
	}
	
}
