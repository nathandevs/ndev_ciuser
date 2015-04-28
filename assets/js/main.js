
$(document).ready(function(){

	rg = $(".alert").text();
	if(rg == ""){
		$(".alert").hide();
	}else{
		$(".alert").delay(2000).fadeOut();
	}
	
});


