<!-- New restaurant -->
<div id="restaurant" class="innerContent">
	<div class="set_rdius">
	<?php echo validation_errors(); ?>
	<?php echo form_open(''); ?>
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add restaurant gallery</p></td>
			</tr>			
		</table>
		<table class='mrgtop50'>
			<tr>
				<td class="txt">Restaurant Image</td>
				<td class="inputs"><input type="file" multiple="multiple" name="gallery_image[]"/></td>
			</tr>
			<tr>
				<td class="txt">Restaurant Name</td>
				<td class="inputs"><input type="text" name="rest_name"/></td>
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