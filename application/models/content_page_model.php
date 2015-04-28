<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_page_model extends CI_Model {
	
	function __construct(){
		parent::__construct();		
	}
	
	public function get_page($page){
		 
		return $page_array = array(
				'header',
				'sidebar',
				'top_content',
				$page,
				'footer'
			);
	}

}