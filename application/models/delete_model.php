<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function del_user($userId){
		$id = array(
			'aid' => $userId
		);
		
		$table = array(
			'admin',
			'adminlogs'
		);
		
		//execute query
		$this->db->delete($table,$id);
 	}
	
	
	public function del_advertisement($id){
		$id = array(
			'adid' => $id
		);
		
		$table = array(
			'advertisement',
			'imageads'
		);
		
		//execute query
		$this->db->delete($table,$id);
	}

}