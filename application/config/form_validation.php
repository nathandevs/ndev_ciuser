<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
|
| Putting  validation(set_rule()) into array
|
*/

$config = array(
			//======================
			// LOGIN
			//======================
			'login' 		=> array(
									array(
											'field' => 'username',
											'label' => 'Username',
											'rules' => 'trim|required|xss_clean'
										 ),
									array(
											'field' => 'password',
											'label' => 'Password',
											'rules' => 'trim|required|matches[password_confirm]'
										)
			),
			
			//======================
			// ADMINISTRATOR
			//======================
			'user_signup' 	=> array(
									array(
											'field' => 'user_name',
											'label' => 'Username',
											'rules' => 'trim|required|xss_clean|callback_check_user_ci'
										 ),
									array(
											'field' => 'user_password',
											'label' => 'Password',
											'rules' => 'trim|required'
										 ),
									array(
											'field' => 'user_cpassword',
											'label' => 'Password Confirmation',
											'rules' => 'trim|required|matches[user_password]'
										 )
			),		
			'user_update' => array(
								array(
										'field' => 'user_name',
										'label' => 'Username',
										'rules' => 'trim|required|xss_clean'
									 ),
								array(
										'field' => 'user_password',
										'label' => 'New Password',
										'rules' => 'trim|required'
									 ),
								array(
										'field' => 'user_cpassword',
										'label' => 'Password Confirmation',
										'rules' => 'trim|required|matches[user_password]'
									 )
			),
			
			//======================
			// ADVERTISEMENT
			//======================
			'ins_adds'		=> array(
									array(
											'field' => 'adds_name',
											'label' => 'Advertisement',
											'rules' => 'trim|required|xss_clean'
										 )
			),	
			'ads_update' => array(
								array(
										'field' => 'ads_display',
										'label' => 'Advertisement',
										'rules' => 'trim|required|xss_clean'
									 ),
								array(
										'field' => 'adds_image',
										'label' => 'Image',
										'rules' => 'trim|xss_clean'
									 )	
									 
			),
			
			//======================
			// RESTAURTANT
			//======================			
			'ins_restaurant1' => array(
								array(
									'field' => 'rest_image',
									'label' => 'Restaurant Image',
									'rules' => 'trim|xss_clean'
								),
								array(
									'field' => 'rest_name',
									'label' => 'Restaurant Name',
									'rules' => 'trim|required|xss_clean'
								),	
								array(
									'field' => 'rest_country',
									'label' => 'Country',
									'rules' => 'required|callback_check_dropdow'
								),
								array(
									'field' => 'rest_open',
									'label' => 'Open time',
									'rules' => 'required|callback_check_dropdow'
								),
								array(
									'field' => 'rest_close',
									'label' => 'Close time',
									'rules' => 'required|callback_check_dropdow'
								),
								array(
									'field' => 'rest_contact',
									'label' => 'Contact',
									'rules' => 'trim|required|xss_clean'
								),
								array(
									'field' => 'rest_budget',
									'label' => 'Budget',
									'rules' => 'trim|required|xss_clean'
								),
								array(
									'field' => 'rest_location',
									'label' => 'Location',
									'rules' => 'required|callback_check_dropdow'
								),
								array(
									'field' => 'rest_charge',
									'label' => 'Service charge',
									'rules' => 'trim|required|xss_clean'
									),
								array(
									'field' => 'rest_card',
									'label' => 'Card',
									'rules' => 'trim|required|xss_clean'
								),
								array(
									'field' => 'rest_website',
									'label' => 'Website',
									'rules' => 'trim|required|xss_clean'
								),
								array(
									'field' => 'rest_map',
									'label' => 'Map',
									'rules' => 'trim|required|xss_clean'
								),
								array(
									'field' => 'rest_description',
									'label' => 'Description',
									'rules' => 'trim|required|xss_clean'
								)
			),
			'ins_restaurant2' => array(
								array(
									'field' => 'food_name',
									'label' => 'Food name',
									'rules' => 'trim|required|xss_clean'
								),
								array(
									'field' => 'food_feature',
									'label' => 'Feature image',
									'rules' => 'required'
								),	
								array(
									'field' => 'food_category',
									'label' => 'Category',
									'rules' => 'required'
								),
								array(
									'field' => 'food_price',
									'label' => 'Price',
									'rules' => 'trim|required|xss_clean'
								)
			),			
			'ins_restaurant3' => array(
								
								array(
									'field' => 'feat_eat',
									'label' => 'Eat all you can',
									'rules' => 'required'
								),	
								array(
									'field' => 'feat_drink',
									'label' => 'Drinks',
									'rules' => 'required'
								),
								array(
									'field' => 'feat_smoking',
									'label' => 'Smoking area',
									'rules' => 'required'
								),	
								array(
									'field' => 'feat_room',
									'label' => 'Private room',
									'rules' => 'required'
								),
								array(
									'field' => 'feat_wifi',
									'label' => 'Wifi',
									'rules' => 'required'
								)
			)
			
    );
	
