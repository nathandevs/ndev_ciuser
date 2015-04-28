$(document).ready(function(){
	//==========================
	// INITIALIZE FUNCTIONS
	//==========================
	$(function() {
		restaurantW();
		restaurantH();
		loginform();
		nav_setOn();
		errors();
		stp_addrestaurant();
	});
	
	//hide error after 5sec
	function errors(){
		
		$('.error_wrap').delay(5000).fadeOut(900);
	}
	
	//change image STEPS in adding restaurant
	function stp_addrestaurant(){
		path = window.location.pathname.slice(8, 30).split('/')[0];
		stpNum =  window.location.pathname.slice(8, 40).split('/')[2];
	
		$(".steps_wrapper ul li img").each(function(){
		
			//localhost
			uri = window.location.hostname;
			
			
			if(path == 'restaurant'){
				
				//change STEP No. to ON | OFF
				if(stpNum == 2){					
					$(".step_num2 img").attr('src','http://'+uri+'/ciRest/assets/img/step2-on.png');
				}else if(stpNum >= 3){					
					$(".step_num2 img").attr('src','http://'+uri+'/ciRest/assets/img/step2-on.png')
					$(".step_num3 img").attr('src','http://'+uri+'/ciRest/assets/img/step3-on.png');
				}
				
				//Show | HIDE the STEP page
				for(x=1; x<=3;x++){				
					if(x == stpNum){
						$("#step"+stpNum).show();
						
					}else{
						$("#step"+x).hide();
					}
				}
				
				//if step num is empty || < 0 || undefined || NaN
				if(stpNum <= 0 || stpNum === "" || stpNum == undefined || isNaN(stpNum)){
					$("#step1").show();
				}
				
				//if step num is greater than 3
				if(stpNum > 3){
					$("#step3").show();
				}
			}
			
		});	
	}
	
	//restaurant width
	function restaurantW(){
		windowW = $(window).width();
		windowH = $(window).height();
		mainBody = $("#main_body").height();
		
		if(mainBody > windowH){
			$("#main_body").css({width: windowW - 302}); 
		}else{
			$("#main_body").css({width: windowW - 284});
			$("#login").css({width: windowW - 62});
		}
		
		
		//change image
		imgH = $('.innerContent .inputs img').height();
		imgW = $('.innerContent .inputs img').width();
		
		
		$('.innerContent .inputs .changeImg').css({
			width: imgW,
			height: imgH
		});
		
		$('.innerContent .inputs .changeImg i').css({
			left: 	imgW / 2 - 15,
			top: 	imgH / 2 - 15
		});
	
	}
	
	//restaurant height
	function restaurantH(){
		windowH = $(window).height();
		mainBody = $("#main_body").height();
		sidebarH = $("#sidebar").height();
		innerBody = $(".innerContent").height();
		bodydiff = mainBody - innerBody
		
		$("#login").css({height: windowH - 72});
		
		//check sidebar height if window screen reach 736
		if(windowH < 736){			
			if(mainBody < windowH){
				//sidebar fixed height
				$("#sidebar").css({height: 800, position: "absolute"});
				$("#main_body").css({height: 800});
			}else{
				//sidebar
				
					$("#sidebar").css({height: mainBody, position: "absolute", paddingBottom: 50});
					$("#main_body").css({height: mainBody, paddingBottom: 50}); 
			
			}
			
		}else{
			if(mainBody < windowH){
				//sidebar fixed height
				$("#sidebar").css({height: windowH, position: "fixed"});
				$("#main_body").css({height: windowH - 3});
			}else{
				//sidebar
				$("#sidebar").css({height: windowH, position: "fixed"});
				$("#main_body").css({height: mainBody, paddingBottom: 50});
				
			}
			
		}
	}
	
	//login form cetner window
	function loginform(){
		windowH = $(window).height();
		windowW = $(window).width();
		$("#loginfrm").css({
			top:	windowH / 2 - 185,
			left:	windowW / 2 - 155
		});
	}
	
	//set ON left navigation
	function nav_setOn(){
		path = window.location.pathname.slice(8, 30).split('/')[0];
		pathArr = ['dashboard','notification','restaurant','food','coupon','advertisement','administrator']
		
		$("#dashNav ul li").each(function(e){
			for(x = 1; x<=7; x++){					
				if(path == pathArr[x-1]){
					$("#dashNav ul li.nav"+x).addClass("navOn");
					
				}		
			}
		});		
	}
	
	//logout hover
	$('.users').hover(function(){
		$(".wrapper").fadeIn(500);
	},function(){
		$(".wrapper").fadeOut(100);
	});
	
	
	//change image hover
	$('.innerContent .inputs .changeImg').hover(function(){
		$('.innerContent .inputs .changeImg i').fadeIn(500);
		$(this).css({
			background: "#eff5f9",
			opacity: .8,
			color: "#396380"
		});
	},function(){
		$('.innerContent .inputs .changeImg').css({
			background: "none",
			opacity: 1.0
		});
		$('.innerContent .inputs .changeImg i').hide();
	});
	
	
	//click function
	$("#dashNav li a").click(function(){
		//window.location.reload();
	});
	
	$("input[type='submit']").click(function(){
	})
	
	$('.innerContent .inputs .changeImg').click(function(){
		$('.innerContent .inputs img').fadeOut(200);
		$(this).fadeOut(200);
		
		$('.imgChange').delay(350).fadeIn(200);
	});
	
	
	
	//==================================
	// CLICK FUNCTIONS
	//==================================	
	
	//window change
	$( window ).resize(function() {
		restaurantW();
		restaurantH();
		loginform();
	});
	
	//press ctrl
	$(document).keydown(function(e) {	
		if (e.which == 96 && e.ctrlKey || e.which == 48 && e.ctrlKey) {
			window.location.reload();
			restaurantW();
			restaurantH();
		}	
	});
	
	
	//filter textbox input alphabet only
	$('.txt').keypress(function(e){
		var txt = String.fromCharCode(e.which);
		if (!txt.match(/[A-Za-z ]/)) {
			return false;
		}
	});
	//filter textbox input numeric only
	$('.num').keypress(function(e){
		
		if(e.which < 48 /* 0 */ || e.which > 57 /* 9 */ ) {
			e.preventDefault();
		}			
	});
	
	//filter email address
	$('.email').keyup(function(){
		var email = $('.email').val();
		if(validateEmail(email)){
			$(this).css({border: '1px solid #C2C2C2'});
		}else{
			$(this).css({border: '1px solid red'});
		}
		
	});
	
});

