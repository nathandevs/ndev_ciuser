<!---main_body-->
<div id="main_body">
	<!-- Search box -->
	<div class="top clearfix">
		<div class="searchBox">
			<?php echo form_open();?>
				<p class="txtbox">
					<input type="text" class="search" placeholder="Search for restaurant, food and advertisement" name="searchtxt" value="" autocomplete="off" />
				</p>
				<p class="searchIcon">
					<i class="fa fa-search"></i>
				</p>
			</form>
		</div>
		<div class="users">
			<div class="user-icon"><i class="fa fa-user"></i></div>
			<div class="wrapper">
				<div class="logout">
					<p class="img"><img src="<?php echo site_url(); ?>assets/img/bg_logout.png" /></p>
					<div class="lg-content">
						<p class="txt1">Signed in as:</p>
						<p class="txt2"><?php echo $this->session->userdata('username'); ?></p>
						<p class="txt3"><a href="<?php echo site_url(); ?>logout">Sign Out</a></p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	<!-- Search box -->
	
	<!-- Header Content -->
	<div id="header" class="clearfix">
		<div class="left">
			<p class="title"><?php echo $content_title; ?></p>
			<p class="subtitle">Do your style deserve better than others.</p>
		</div>
		<div class="right">
			<ul class="clearfix">
				<li class="f1"><a href="<?php echo site_url(); ?>notification"><i class="fa fa-info-circle"></i>
				
				<span class="notify" style="display: none; padding: 0px;">0</span>
				</a></li>
				
				<li class="f2"><a href="<?php echo site_url(); ?>restaurant"><i class="fa fa-building"></i></a></li>
				<li class="f2"><a href="<?php echo site_url(); ?>food"><i class="fa fa-cutlery"></i></a></li>
				<li class="f2"><a href="<?php echo site_url(); ?>coupon"><i class="fa fa-sun-o"></i></a></li>
				<li class="f2"><a href="<?php echo site_url(); ?>advertisement"><i class="fa fa-desktop"></i></a></li>
				<li class="f3"><a href="<?php echo site_url(); ?>administrator"><i class="fa fa-cogs"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- Header Content -->
	
	<!-- LINE SEPARATOR -->
	<p class="content_lineseparator"></p>
	<!-- LINE SEPARATOR -->
	
	
	
