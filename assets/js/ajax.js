var site_url = '<?php echo site_url();?>';
$(document).ready(function(){
	
	//login page
	$("#loginbtn").live("click",function(e){
		//e.preventDefault();
		//var site_url = window.location;
		var username=$("#user").val();
		var password=$("#pass").val();
		$(".error_msg").fadeIn().show();
	
		$.ajax({
            type: "POST",
            url: site_url+"/login/loginuser",
            data: ({usr: username, pass: password}),

            success: function(response){			
              
            }           
        });           
	});
	
	
	//delete data
	$(".fa-trash-o").click(function(){
		dataId 		= $(this).parent().attr("id");
		host 		= window.location.host;															//http://www.host.com  || localhosts
		fldr		= window.location.pathname.slice(1, 30).split('/')[0];			//foldername
		cls 		= window.location.pathname.slice(8, 30).split('/')[0];			//class name
		uri			= 'http://'+ host+'/'+fldr+'/'+cls+'/';												//http://www.host.com/foldername/class name
		userstat	= $(this).parent().attr("class").split(' ')[1];								// Online || Offline
		username 	= $(this).parent().attr("class").split(' ')[0];								// username
		
		
		//check if not administrator page
		if(cls == "administrator"){			
			newdata = "<span style='color:red;'>"+username+"</span>"
		}else{
			newdata = "this data"
		}
		
		
		//check admin || user if online or not		
		if(userstat == "Online"){
			
			//can't delete user statsu == ONLINE
			$('<div></div>').appendTo('body')
					.html("<div><h6>You can't delete "+newdata+" user.</h6></div>")
					.dialog({
					modal: true,
					title: 'Delete',
					zIndex: 10000,
					autoOpen: true,
					width: 'auto',
					resizable: false,
					buttons: {
						Ok: function () {								
							$(this).dialog("close");
						}
					},
					close: function (event, ui) {
						$(this).remove();
					}
			});
		}else{
		
			$('<div></div>').appendTo('body')
					.html('<div><h6>Are you sure you want to delete '+newdata+'?</h6></div>')
					.dialog({
					modal: true,
					title: 'Delete',
					zIndex: 10000,
					autoOpen: true,
					width: 'auto',
					resizable: false,
					buttons: {
						Yes: function () {
								//hide row
								$("#"+dataId).parents("tr").fadeOut(600);
								
								//put class in array
								arr_page = [
									'administrator',
									'advertisement'
								]
								
								//put delete function in array
								arr_function = [
									'del_user',
									'del_advertisement'
								]								
								
								for(i=0; i<=1; i++){
									if(cls == arr_page[i]){
										$.ajax({
											type: 'POST',
											url: uri+arr_function[i],
											data: {xhrID : dataId},
											success: function(data){
												//refresh page
												setTimeout(function(){
													window.location.reload();
												}, 500);
											}
										});									
									}								
								}								
								
							$(this).dialog("close");
						},
						No: function () {
							$(this).dialog("close");
						}
					},
					close: function (event, ui) {
						$(this).remove();
					}
			});
		
		}
	});
	
});

