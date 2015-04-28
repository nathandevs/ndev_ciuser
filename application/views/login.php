
<header>
	<?php echo form_open('user/login'); ?>
		<div class="container">
			<div class="col-sm-12 col-sm-offset-5">
				<div class=" col-sm-3 form-group">
					<input type="text" name="un" id="usernames" class="form-control " placeholder="Username">
				</div>
				<div class="col-sm-3 form-group">
					<input type="password" name="pwd" id="passwords" class="form-control" placeholder="Password" >
				</div>
				<input type="submit" class="btn btn-primary" value="Login">
			</div>
		</div>
	</form>
</header>
<div class=" container alert alert-danger"><?php echo validation_errors(); ?></div>


<section>	
	<?php echo form_open('user/register'); ?>
		<div class="container register ">
			<div class="col-sm-5 col-sm-offset-3 img-thumbnail">
				<h2>Free Registration</h2>
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo set_value('username') ?>"></input>
				</div>
				<div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo set_value('email') ?>"></input>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo set_value('password') ?>"></input>
				</div>
				<div class="form-group">
					<input type="password" name="cpassword" class="form-control" placeholder="Confirm password" value="<?php echo set_value('cpassword') ?>"></input>
				</div>
				<input type="submit" class="btn btn-success pull-right" id="register" value="Register">
				<div class="clearfix"></div>
			</div>
		</div>
	</form>
</section>


