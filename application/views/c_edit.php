<!-- New restaurant -->
<div id="administrator" class="innerContent">
	
	<!--hide error wrapper if empty-->
	<?php if(validation_errors() == false) { ?>
		<style>
			.error_wrap{ display: none;}
		</style>
	<?php }	?>
	
	
	<div class="set_rdius">
	
	<?php 
	//load form
		echo form_open_multipart(''.$uri.'/editpage/?id='.$id.'&p='.$page.'');	
		
		
		//=============================================
		// Administrator
		//=============================================
		if($this->encryption->decode($page) == 'administrator'){
	?>	
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add administrator</p></td>
			</tr>			
		</table>
		<table class='mrgtop50'>
			<tr>
				<td class="txt">User Name</td>
				<td class="inputs">
					<div class="error_wrap"><?php echo form_error('user_name'); ?></div>
					<input type="text" name="user_name" value="<?php echo $get_username; ?>"/>
				</td>
			</tr>
			<tr>
				<td class="txt">New Password</td>
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

	<?php } 
	
		//=============================================
		// Advertsisement
		//=============================================
		elseif($this->encryption->decode($page) == 'advertisement'){ ?>
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add administrator</p></td>
			</tr>			
		</table>
		<table class='mrgtop50'>
			<tr>
				<td class="txt">Image</td>
				<td class="inputs">
					<img src="<?php echo site_url()."public/advertisement/".$imgName; ?>" alt="<?php echo $imgName; ?>" name="ads_image" width="100"/>
					<div class="changeImg">
						<i class="fa fa-pencil-square-o"></i>
					</div>
					<input type="file" name="adds_image" class="imgChange"/>
				</td>
			</tr>
			<tr>
				<td class="txt">Display</td>
				<td class="inputs">
					<textarea name="ads_display"><?php echo $display; ?></textarea>
				</td>
			</tr>
		</table>
		
	<?php } ?>
	
		<div class="button_wrapper">
			<ul class="clearfix">
				<li><input type="submit" name="user" value="Update"/></li>
			</ul>
		</div>
		
		

	</form>
	</div>
</div>