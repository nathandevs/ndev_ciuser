 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function login_model($un,$ps){
		$this->db->where('username', $un);
		$this->db->where('password', md5($ps));

		$result = $this->db->get('user');
		if($result->num_rows() >0){
			$newdata = array(
				'user_id' 	=> $row->id,
				'user_name'	=> $row->username,
				'logged_in'	=> TRUE
			);

			$this->session->set_userdata($newdata);
			return true;
		}
		return false;
	}

	public function adduser(){
		$newdata = array(
			'username'		=> $this->input->post('username'),
			'email'			=> $this->input->post('email'),
			'password'		=> md5($this->input->post('password'))
		);

		$this->db->insert('user', $newdata);
	}

	public function check_un($un){
		$this->db->where('username',$un);

		$result = $this->db->get('user');

		if($result->num_rows() > 0){
			//exist username
			return true;
		}else{
			//insert new username
			return false;
		}
	}

	public function fetchdadta(){
		$this->db->select('*');
		$query = $this->db->get('user');

		return $query->result();
	}
}
    