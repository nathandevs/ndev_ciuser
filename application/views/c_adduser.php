<!-- New restaurant -->
<div id="administrator" class="innerContent">
	
	<!--hide error wrapper if empty-->
	<?php if(validation_errors('') == false) { ?>
		<style>
			.errors_wrap{ display: none;}
		</style>
		
	
	<?php }?>
	
	<div class="set_rdius">
	
	<?php echo form_open(''); ?>
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add administrator</p></td>
			</tr>			
		</table>
		<table class='mrgtop50'>
			<tr>
				<td class="txt">User Name</td>
				<td class="inputs">					
					<div class="error_wrap"><?php echo form_error('user_name');  ?></div>
					<input type="text" name="user_name" value="<?php echo set_value('user_name'); ?>"/>
				</td>
			</tr>
			<tr>
				<td class="txt">Password</td>
				<td class="inputs">
					<div class="error_wrap"><?php echo form_error('user_password'); ?></div>
					<input type="password" name="user_password" value="<?php echo set_value('user_password'); ?>"/>
				</td>
			</tr>
			<tr>
				<td class="txt">Confirm Password</td>
				<td class="inputs">
					<div class="error_wrap"><?php echo form_error('user_cpassword'); ?></div>
					<input type="password" name="user_cpassword" value="<?php echo set_value('user_cpassword'); ?>"/>
				</td>
			</tr>
		</table>
		
		<div class="button_wrapper">
			<ul class="clearfix">
				<li><input type="submit" name="user" value="Save"/></li>
			</ul>
		</div>
		
	<?php echo form_close(); ?>
	</div>
	
</div>