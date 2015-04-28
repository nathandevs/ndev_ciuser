<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	public function check_user_exist($str){
	
		$this->db->where("username",$str);
		
        $query = $this->db->get("admin");
       
	   if($query->num_rows() > 0)
        {
            return true;
        }else{
            return false;
        }
	}

}