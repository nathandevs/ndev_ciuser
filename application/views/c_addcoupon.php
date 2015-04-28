<!-- New restaurant -->
<div id="coupon" class="innerContent">
	<div class="set_rdius">
	<?php echo validation_errors(); ?>
	<?php echo form_open(''); ?>
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add coupon</p></td>
			</tr>			
		</table>
		<table class='mrgtop50'>
			<tr>
				<td class="txt">Restaurant Name</td>
				<td class="inputs"><input type="text" name="rest_name"/></td>
			</tr>
			<tr>
				<td class="txt">Policy</td>
				<td class="inputs"><input type="text" name="coupon_policy"/></td>
			</tr>
			<tr>
				<td class="txt">Discount</td>
				<td class="inputs"><input type="text" name="coupon_discount"/></td>
			</tr>
			<tr>
				<td class="txt">Expired Date</td>
				<td class="inputs"><input type="text" name="coupon_expdate"/></td>
			</tr>
			<tr>
				<td class="txt">Details</td>
				<td class="inputs">					
					<textarea name="coupon_details"></textarea>
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