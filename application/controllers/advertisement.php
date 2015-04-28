<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advertisement extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->library('../controllers/uploads');
	}
	
	public function index()
	{		
		if($this->session->userdata('username') != ""){
			
			$data = array(
				'title'				=> "Advertisement",
				'content_title'		=> "Advertisement",
				'qry_result'		=> $this->fetch_model->get_addvertisement()
			);
				
			$page_array = $this->content_page_model->get_page('c_advertisement');
		
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
	public function addadvertisement()
	{
		
		$data = array(
			'title'				=> "Advertisement",
			'content_title'		=> "Advertisement"
		);		
		
		//call upload image helper
		uploadImg('advertisement', 'adds_image');
		
		if ($this->form_validation->run('ins_adds') == FALSE || !$this->upload->do_upload('adds_image'))
		{
			
			$page_array = $this->content_page_model->get_page('c_addadvertisement');
		
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}	
		}
		else
		{		
			$upload = $this->upload->data();
			$imgName = $upload['file_name'];
			
			$this->insert_model->ins_advertisement($imgName);
			
			redirect('advertisement');			
		}	
		
	}
	
	
	//=============================================
	// EDIT DATA
	//=============================================	
	public function editpage(){
		$decodeId = $this->encryption->decode($this->input->get('id', TRUE));
		
		$data = array(
			'title'						=> "Advertisement",
			'content_title'				=> "Advertisement",
			
			//get data from ulr
			'id'						=> $this->input->get('id', TRUE),
			'page'						=> $this->input->get('p', TRUE),
			'uri'						=> $this->uri->segment(1),
			
			//get data direct to database
			'imgName'					=> $this->fetch_model->get_flds_advertisement($decodeId,'name'),
			'display'					=> $this->fetch_model->get_flds_advertisement($decodeId,'display')
		);
		
		
		//call upload image helper
		uploadImg('advertisement', 'adds_image');
		
		
		
		if ($this->form_validation->run('ads_update') == FALSE)
		{
			$page_array = $this->content_page_model->get_page('c_edit');
			
			foreach($page_array as $page){
				$this->load->view($page, $data);
			}
		}
		else
		{	
			$imgName 	= $this->fetch_model->get_flds_advertisement($decodeId,'name');
			$ids 		= $this->fetch_model->get_imgId($imgName);
			
			if(!$this->upload->do_upload('adds_image')){
				$this->update_model->upd_advertisement($decodeId, $imgName);
				
			}else{
				$uploads 	= $this->upload->data();
				$imgs 	= $uploads['file_name'];
				
				//delete the image fromt the folder
				deleteImg('advertisement', $imgName); 
				
				$this->update_model->upd_advertisement($ids, $imgs);
				
			}
			redirect('advertisement');
			
		}		
		
	}
	
	
	
	//=============================================
	// DELETE DATA
	//=============================================
	public function del_advertisement(){
		//get the id
		$id = $this->input->post('xhrID');		
		
		//get the name of image
		$imageName = $this->fetch_model->get_flds_advertisement($id, 'name');
		
		//delete the image fromt the folder
		deleteImg('advertisement', $imageName); 		
		
		//delete data from database
		$this->delete_model->del_advertisement($id);
		
	}
	
}
