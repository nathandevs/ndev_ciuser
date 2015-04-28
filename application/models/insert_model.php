<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Insert_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function ins_user(){
	
		//insert into admin table
		$data = array(
			'username'	=> $this->input->post('user_name'),
			'password' 	=> md5($this->input->post('user_password')),
			'status' 	=> 'Offline'
		);
		
		$this->db->insert('admin',$data);
		
	}
	
	public function user_timestamp($un){
		//set date and time
		date_default_timezone_set("Asia/Manila");		
		$time_today = date("F j, Y, g:i A");
		
		$id = $this->fetch_model->get_last_id('admin','aid','username',$un);
		
		$data = array(
			'aid' 				=> $id,
			'timelogin'			=> $time_today
		);
		
		$this->db->insert('adminlogs',$data);
	}
	
	public function ins_advertisement($name){
		
		//prepare sql fields
		$data1 = array(
			'display' => $this->input->post('adds_name')
		);
		
		//insert data to advertisement table
		$this->db->insert('advertisement', $data1);
		
		//get last inserted id in advertisement table
		$get_addsId = $this->fetch_model->get_last_id('advertisement', 'adid', null, null);
		
		//prepare sql fields
		$data2 = array(
			'adid'	=> $get_addsId,
			'name'	=> $name
		);
		
		//insert data to imageads table
		$this->db->insert('imageads', $data2);
	}
}