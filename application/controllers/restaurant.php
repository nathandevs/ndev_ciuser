<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Restaurant extends CI_Controller {
	function __construct(){
		parent::__construct();
		//$this->load->library('../controllers/data_insert');
	}
	
	public function index()
	{		
		if($this->session->userdata('username') != ""){
		
			$data = array(
				'title'				=> "Restaurant",
				'content_title'		=> "Restaurant"
			);
	
			$page_array = $this->content_page_model->get_page('c_restaurant');
		
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
	
	public function addrestaurant()
	{	
		$data = array(
			'title'				=> "Restaurant",
			'content_title'		=> "Restaurant"
		);
		
		$drpdwn = array(
			$this->input->post('rest_country'),
			$this->input->post('rest_open'),
			$this->input->post('rest_close'),
			$this->input->post('rest_location')
		);
		
		$numStp = $this->uri->segment(3);
		
		
		if($this->form_validation->run('ins_restaurant'.$numStp) === FALSE){
			$page_array = $this->content_page_model->get_page('c_addrestaurant');
			
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}
			
			if($numStp == 1){
				foreach($drpdwn as $val){
					$this->check_dropdow($val);
				}
			}		
			
		}else {
			if($numStp <=2){
				$numStp++;			
				redirect('/restaurant/addrestaurant/'.$numStp);
			}else{
				redirect('/restaurant/');
			}			
		}
		
	}

	
	public function check_dropdow($str){
		if($str == "select"){
			$this->form_validation->set_message('check_dropdow', 'The %s field is required.');
			
			return false;
		}else{
			return true;
		}
	}
	
	public function addgallery()
	{	
		$data = array(
			'title'				=> "Restaurant",
			'content_title'		=> "Restaurant"
		);
		
		$page_array = $this->content_page_model->get_page('c_addgallery');
		
		foreach($page_array as $page){
			$this->load->view($page, $data);
		}		
	}
	
	
}
