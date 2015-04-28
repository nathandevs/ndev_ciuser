
<!-- SIDE BAR -->
<div id="sidebar">
	<p class="logo"><a href="<?php echo site_url(); ?>"><img src="<?php echo site_url(); ?>assets/img/logo.png" /></a></p>
	<!-- LINE SEPARATOR -->
	<p class="line"><img src="<?php echo site_url(); ?>assets/img/line_separator.png" /></p>
	<!-- LINE SEPARATOR -->
	<div class="rest_total">
		<p class="txt1">Registered Restaurant . .</p>
		<p class="txt2"><?php echo $this->session->userdata('get_all_restaurant'); ?></p>
	</div>
	<!-- LINE SEPARATOR -->
	<p class="line"><img src="<?php echo site_url(); ?>assets/img/line_separator.png" /></p>
	<!-- LINE SEPARATOR -->
	<div id="dashNav">
		<ul>
			<li class="nav1"><a href="<?php echo site_url(); ?>dashboard"><img src="<?php echo site_url(); ?>assets/img/nav1.png" /></a></li>
			<li class="nav2"><a href="<?php echo site_url(); ?>notification"><img src="<?php echo site_url(); ?>assets/img/nav2.png" /></a></li>
			<li class="nav3"><a href="<?php echo site_url(); ?>restaurant"><img src="<?php echo site_url(); ?>assets/img/nav3.png" /></a></li>
			<li class="nav4"><a href="<?php echo site_url(); ?>food"><img src="<?php echo site_url(); ?>assets/img/nav4.png" /></a></li>
			<li class="nav5"><a href="<?php echo site_url(); ?>coupon"><img src="<?php echo site_url(); ?>assets/img/nav5.png" /></a></li>
			<li class="nav6"><a href="<?php echo site_url(); ?>advertisement"><img src="<?php echo site_url(); ?>assets/img/nav6.png" /></a></li>
			<li class="nav7"><a href="<?php echo site_url(); ?>administrator"><img src="<?php echo site_url(); ?>assets/img/nav7.png" /></a></li>
		</ul>
	</div>
</div>
<!-- SIDE BAR -->
