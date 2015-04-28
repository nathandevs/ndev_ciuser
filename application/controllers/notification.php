<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index()
	{	
		if($this->session->userdata('username') != ""){
			$data = array(
				'title'				=> "Notification",
				'content_title'		=> "Notification"
			);

			$page_array = $this->content_page_model->get_page('c_notification');
		
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}
			
		}else{
			redirect(site_url());
		}
		
	}
	
}
