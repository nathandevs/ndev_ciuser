<!-- New restaurant -->
<div id="advertisement" class="innerContent">

	<!--hide error wrapper if empty-->
	<?php if(validation_errors() == false) { ?>
		<style>
			.error_wrap{ display: none;}
		</style>
	<?php }	?>
	
	<div class="set_rdius">
	
	<?php
		//$attrib = array('enctype' => 'multipart/form-data');
		//echo form_open('', $attrib);
		echo form_open_multipart();
		
	?>
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add advertisement</p></td>
			</tr>			
		</table>
		<table class='mrgtop50'>
			<tr>
				<td class="txt">Advertisement Image</td>
				<td class="inputs">
					<input type="file" name="adds_image"/>
				</td>
			</tr>
			<tr>
				<td class="txt">Advertisement</td>
				<td class="inputs">
					<div class="error_wrap"><?php echo form_error('adds_name'); ?></div>
					<textarea name="adds_name"><?php echo set_value('adds_name'); ?></textarea>
				</td>
			</tr>

		</table>
		
		<div class="button_wrapper">
			<ul class="clearfix">
				<li><input type="submit" name="Save" value="Save"/></li>
			</ul>
		</div>
		
	</form>
	</div>
</div>