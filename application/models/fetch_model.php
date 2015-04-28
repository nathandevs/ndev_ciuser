<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Fetch_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	//===================================
	//Administrator
	//===================================
	
	public function get_user(){
		$this->db->select('*');		
		$query = $this->db->get('admin');
		
		if($query->num_rows() != 0){
			return $query->result();
		}else{
			return FALSE;
		}		
	}
	
	public function get_user_timestamp($id){
		$this->db->select('*');
		$this->db->where('aid', $id);
		$query = $this->db->get('adminlogs');
		
		if($query->num_rows() != 0){
			return $query->result();
		}else{
			return FALSE;
		}
		
	}
	
	public function get_edit_user($id, $flds){
		$this->db->select('*');	
		$this->db->where('aid', $id);
		$query = $this->db->get('admin');
		
		if($query->num_rows() != 0){
			foreach($query->result() as $row){
				return $row->$flds;
			}
		}		
	}
	
	public function get_last_id($table,$row,$fld,$id){
	
		if($id != "" || $id != null && $fld != '' || $fld != null){
		
			$this->db->select($row);
			$this->db->where($fld,$id);
			$this->db->order_by($row, "desc");
			$qry = $this->db->get($table);
			
			
			if($qry->num_rows() != 0){
				foreach($qry->result() as $r){
					return $r->$row;
				}
			}
		}else{
			
			$this->db->select($row);
			$this->db->order_by($row, "desc");
			$qry = $this->db->get($table);
			
			if($qry->num_rows() != 0){
				foreach($qry->result() as $r){
					return $r->$row;
				}
			}
		}		
	}
	
	
	//===================================
	//Advertisement
	//===================================	
	public function get_addvertisement(){
		$this->db->select('*');	
		$this->db->join('imageads', 'imageads.adid = advertisement.adid');
		$query = $this->db->get('advertisement');
		
		if($query->num_rows() != 0){
			return $query->result();
		}else{
			return FALSE;
		}	
	}
	
	public function get_flds_advertisement($id, $flds){
		$this->db->select('*');
		$this->db->join('imageads', 'imageads.adid = advertisement.adid');
		$this->db->where('advertisement.adid', $id);
		$query = $this->db->get('advertisement');
		
		if($query->num_rows() != 0){
			foreach($query->result() as $row){
				return $row->$flds;
			}
		}		
	}
	
	public function get_imgId($imgName){
		$this->db->select('*');
		$this->db->join('imageads', 'imageads.adid = advertisement.adid');
		$this->db->where('name', $imgName);
		$query = $this->db->get('advertisement');
		
		if($query->num_rows() != 0){
			foreach($query->result() as $row){
				return $row->imgaid;
			}
		}
	
	}
	
	//===================================
	//Restaurant
	//===================================
	public function get_all_restaurant(){
		$query = $this->db->get('restaurant');
		
		if($query->num_rows()!= 0){
			return $query->num_rows();
		}else{
			return 0;
		}
	}
	
}