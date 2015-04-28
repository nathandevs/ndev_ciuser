<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function validate_user($un, $ps){
	
		//prep the query
		$this->db->where('username', $un);
		$this->db->where('password', $ps);
		
		//run query
		$query = $this->db->get('admin');
		
		//ckeck if the result
		if($query->num_rows == 1){
			$row = $query->row();
			
			$data = array(
				'username' 				=> $row->username,
				'get_all_restaurant'	=> $this->fetch_model->get_all_restaurant()
			);
			
			$this->session->set_userdata($data);
			
			return true;
		}
		return false;
	}

}