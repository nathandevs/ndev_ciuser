<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	//=============================================
	// UPDATE ADMIN
	//=============================================	
	public function upd_user(){
		$data_arr = array(
			'username'	=>	$this->input->post('user_name'),
			'password'	=>	md5($this->input->post('user_password'))
		);
		
		//decrypt the uri ID
		$id = $this->encryption->decode($this->input->get('id', TRUE));
		
		$this->db->where('aid', $id);
		$this->db->update('admin', $data_arr);
	}
	
	public function upd_user_status($stat,$user){
	
		if($user != "" || $user != null){
			$data = array('status' => $stat);
		
			$this->db->where('username',$user);
			$this->db->update('admin',$data);		
		}else{
			// expired || empty session
			$last_id = $this->fetch_model->get_last_id('admin','aid', 'status', 'Online');
			
			$data = array('status' => $stat);
		
			$this->db->where('aid',$last_id);
			$this->db->update('admin',$data);	
		}
		
	}

	public function user_timestamp($un){
		//set date and time
		date_default_timezone_set("Asia/Manila");		
		$time_today = date("F j, Y, g:i A");
	
		// click logout		
		if($un != "" || $un != null){
		
			$id = $this->fetch_model->get_last_id('admin','aid','username',$un);
			$id2 =	$this->fetch_model->get_last_id('adminlogs','tid','aid',$id);
			$data = array(
				'timelogout'				=> $time_today
			);
			
			$this->db->where('tid', $id2);
			$this->db->update('adminlogs',$data);		
		
		}else{
			// expired || empty session
			
			//get last id
			$last_id = $this->fetch_model->get_last_id('adminlogs', 'tid', null, null);
			
			$data = array(
				'timelogout'				=> $time_today
			);
			
			$this->db->where('tid', $last_id);
			$this->db->update('adminlogs',$data);			
		}
		
	}
	
	
	//=============================================
	// UPDATE ADVERTISEMENT
	//=============================================
	public function upd_advertisement($id, $name){
		$data1 = array(
			'display'	=> $this->input->post('ads_display')
		);
		
		$data2 = array(
			'name'	=> $name
		);
		
		$this->db->where('adid', $id);
		$this->db->update('advertisement',$data1);
		
		$this->db->where('imgaid', $id);
		$this->db->update('imageads',$data2);
	
		
		
		
	}
}