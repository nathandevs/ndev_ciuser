<!-- New restaurant -->
<div id="food" class="innerContent">
	<div class="set_rdius">
	<?php echo validation_errors(); ?>
	<?php echo form_open(''); ?>
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add food and drink</p></td>
			</tr>			
		</table>
		<table class='mrgtop50'>
			<tr>
				<td class="txt">Food Image</td>
				<td class="inputs"><input type="file" name="food_image"/></td>
			</tr>
			<tr>
				<td class="txt">Restaurant Name</td>
				<td class="inputs"><input type="text" name="rest_name"/></td>
			</tr>
			<tr>
				<td class="txt">Food Name</td>
				<td class="inputs"><input type="text" name="food_name"/></td>
			</tr>
			<tr>
				<td class="txt">Meal type</td>
				<td class="inputs">
					<input type="radio" name="food_type" value="Food">Food
					<input type="radio" name="food_type" value="Drink">Drink
				
				</td>
			</tr>
			<tr>
				<td class="txt">price</td>
				<td class="inputs"><input type="text" name="food_price"/></td>
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