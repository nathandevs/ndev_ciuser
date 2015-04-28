<!---main_body-->

<div id="login" class="innerContent">
	
	<?php echo form_open('login/attempt_login/1');?>
		<div id="loginfrm">
			<p class="logo"><img src="<?php echo site_url(); ?>/assets/img/logo_login.png" alt="logo" width="40%"/></p>
			<p class="username">
				<input type="text" name="username" id="user" value="<?php echo set_value('username'); ?>"placeholder="Username"/>
				<i class="fa fa-user"></i>
			</p>
			<p class="password">
				<input type="password" name="password" id="pass" value="<?php echo set_value('password'); ?>" placeholder="Password"/>
				<i class="fa fa-lock"></i>
			</p>
			<p class="button"><input type="submit" name="login" id="loginbtn" value="LOGIN"/></p>
			
			<p class="error_msg"><?php echo $error_msg; ?></p>
		</div>
	</form>