<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	function __construct(){
		parent::__construct();		
	}
	
	public function index()
	{	
		
		if($this->session->userdata('username') != ""){
			$data = array(
				'title'				=> "Administrator",
				'content_title'		=> "Administrator",
				'qry_result'		=> $this->fetch_model->get_user()
			);
			
			$page_array = $this->content_page_model->get_page('c_administrator');
			
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}
			
		}else{
			redirect(site_url());
		}
	}
		
	public function timelogs(){
		//get id from URL
		$get_id = $this->encryption->decode($this->input->get('id', TRUE));
	
	
		$data = array(
			'title'				=> "Administrator",
			'content_title'		=> "Administrator",
			'qry_result'		=> $this->fetch_model->get_user_timestamp($get_id)
		);
		
		$page_array = $this->content_page_model->get_page('c_timelogs');
		
		foreach($page_array as $page){
			$this->load->view($page, $data);
		}
		
	}
	public function check_user_ci(){
		$usr = $this->input->post('user_name');
		
		$result = $this->user_model->check_user_exist($usr);
	   
	   if($result)
		{
			$this->form_validation->set_message('check_user_ci', ''.$usr.' already exit in the database.');
			return false;
		}else{
			return true;
		}
	}
	
	
	//=============================================
	// INSERT DATA
	//=============================================	
	public function adduser()
	{		
		$data = array(
			'title'				=> "Administrator",
			'content_title'		=> "Administrator"
		);
		
		$this->form_validation->set_message('required', '%s field is empty');
		
		if ($this->form_validation->run('user_signup') == FALSE)
		{
			
			$page_array = $this->content_page_model->get_page('c_adduser');
			
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}
		}
		else
		{		
			$this->insert_model->ins_user();			
			redirect('administrator');			
		}	
	}
	
	
	//=============================================
	// EDIT DATA
	//=============================================
	public function editpage(){
		$decodeId = $this->encryption->decode($this->input->get('id', TRUE));
		
		$data = array(
			'title'						=> "Administrator",
			'content_title'				=> "Administrator",
			
			//get data from ulr
			'id'						=> $this->input->get('id', TRUE),
			'page'						=> $this->input->get('p', TRUE),
			'uri'						=> $this->uri->segment(1),
			
			//get data direct to database
			'get_username'				=> $this->fetch_model->get_edit_user($decodeId,'username')
		);
		
		
		if ($this->form_validation->run('user_update') == FALSE)
		{
			$page_array = $this->content_page_model->get_page('c_edit');
			
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}
		}
		else
		{		
			$this->update_model->upd_user();			
			redirect('administrator');			
		}	
		
	}
	
	
	//=============================================
	// DELETE DATA
	//=============================================
	public function del_user(){	
		$id = $this->input->post('xhrID');
		
		$this->delete_model->del_user($id);
	}

}
