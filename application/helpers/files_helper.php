<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists(''))
{
	//upload images
   function uploadImg($path,$inputName){
		$config	= array(
				'upload_path'     => "./public/".$path."/",
				'allowed_types'   => "gif|jpg|png|jpeg",
				'overwrite'       => TRUE,
				'max_size'        => "10000KB",
				'encrypt_name'	  => TRUE
		);
		
		$ci=& get_instance();
		
		//load the config
		$ci->load->library('upload',$config);
		
		//initialize config
		$ci->upload->initialize($config);
		
		
		return $ci->upload->data();
		
	}
	
	function deleteImg($folder, $imgname){
		return @unlink('./public/'.$folder.'/'.$imgname);
	}
}