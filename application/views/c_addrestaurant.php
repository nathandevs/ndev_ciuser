<!-- New restaurant -->
<div id="restaurant" class="innerContent">
	
	<!--hide error wrapper if empty-->
	<?php if(validation_errors() == false) { ?>
		<style>
			.error_wrap{ display: none;}
		</style>
	<?php }	?>
	
	<div class="set_rdius">
	<?php echo form_open_multipart(); ?>
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Add new restaurant</p></td>
			</tr>			
		</table>
		<div class="steps_wrapper">
			<ul class="clearfix">
				<li class="step_num1"><img src="<?php echo site_url(); ?>assets/img/step1.png" width="80%"/></li>
				<li class="hr"><hr /></li>
				<li class="step_num2"><img src="<?php echo site_url(); ?>assets/img/step2-off.png" width="80%"/></li>
				<li class="hr"><hr/></li>
				<li class="step_num3"><img src="<?php echo site_url(); ?>assets/img/step3-off.png" width="80%"/></li>
			</ul>
		</div>
				
		<!--
		============================
		STEP 1
		============================
		-->
		<div id="step1">
			<table >
				<tr>
					<td class="txt">Restaurant Image</td>
					<td class="inputs"><input type="file" name="rest_image"/></td>
				</tr>
				<tr>
					<td class="txt">Restaurant Name</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_name'); ?></div>
						<input type="text" name="rest_name" value="<?php echo set_value('rest_name'); ?>"/>
					</td>
				</tr>
				<tr>
					<td class="txt">Country</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_country'); ?></div>
						<select name="rest_country">
							<option value="select" <?php echo set_select('rest_country', 'select');?>> Choose Country</option>
							<option value="others" <?php echo set_select('rest_country', 'others');?>>Others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="txt">Open Time</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_open'); ?></div>
						<select name="rest_open">
							<option value="select" <?php echo set_select('rest_open', 'select');?>> Choose open time</option>
							<option value="others" <?php echo set_select('rest_open', 'others');?>>Others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="txt">Close Time</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_close'); ?></div>
						<select name="rest_close">
							<option value="select" <?php echo set_select('rest_close', 'select');?>> Choose close time</option>
							<option value="others" <?php echo set_select('rest_close', 'others');?>>Others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="txt">Contact No.</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_contact'); ?></div>
						<input type="text" name="rest_contact" value="<?php echo set_value('rest_contact'); ?>"/>
					</td>
				</tr>
				<tr>
					<td class="txt">Budget meal</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_budget'); ?></div>
						<input type="text" name="rest_budget" value="<?php echo set_value('rest_budget'); ?>"/>
					</td>
				</tr>
				<tr>
					<td class="txt">Location</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_location'); ?></div>
						<select name="rest_location">
							<option value="select" <?php echo set_select('rest_location', 'select');?>> Choose location</option>
							<option value="others" <?php echo set_select('rest_location', 'others');?>>Others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="txt">Service charge</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_charge'); ?></div>
						<input type="radio" class=" rest_charge" name="rest_charge" <?php echo set_radio('rest_charge', 'Yes'); ?> value="Yes">Yes
						<input type="radio" class=" rest_charge" name="rest_charge" <?php echo set_radio('rest_charge', 'No'); ?> value="No">No
					
					</td>
				</tr>
				<tr>
					<td class="txt">Card accept</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_card'); ?></div>
						<input type="radio" class="rest_card" name="rest_card" <?php echo set_radio('rest_card', 'Yes'); ?> value="Yes">Yes
						<input type="radio" class="rest_card" name="rest_card" <?php echo set_radio('rest_card', 'No'); ?> value="No">No
					</td>
				</tr>
				<tr>
					<td class="txt">Website</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_website'); ?></div>
						<input type="text" name="rest_website" value="<?php echo set_value('rest_website'); ?>"/>
					</td>
				</tr>
				<tr>
					<td class="txt">Map</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_map'); ?></div>
						<textarea name="rest_map">
							<?php echo set_value('rest_map'); ?>
						</textarea>
					</td>
				</tr>
				<tr>
					<td class="txt">Description</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('rest_description'); ?></div>
						<textarea name="rest_description">
							<?php echo set_value('rest_description'); ?>
						</textarea>
					</td>
				</tr>
			</table>		
		</div>
		
		
		<!--
		============================
		STEP 2
		============================
		-->
		<div id="step2">
			<table>
				<tr>
					<td class="txt">Food Image</td>
					<td class="inputs">						
						<input type="file" name="food_image"/>
					</td>
				</tr>
				<tr>
					<td class="txt">Food Name</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('food_name'); ?></div>
						<input type="text" name="food_name" value="<?php echo set_value('food_name'); ?>">
					</td>
				</tr>
				
				<tr>
					<td class="txt">Featured Image</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('food_feature'); ?></div>
						<input type="radio" name="food_feature" <?php echo set_radio('food_feature', 'Yes'); ?> value="Yes">Yes
						<input type="radio" name="food_feature" <?php echo set_radio('food_feature', 'No'); ?>  value="No">No
					
					</td>
				</tr>
				<tr>
					<td class="txt">Category</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('food_category'); ?></div>
						<input type="radio" name="food_category" <?php echo set_radio('food_category', 'Yes'); ?> value="Yes">Food
						<input type="radio" name="food_category" <?php echo set_radio('food_category', 'No'); ?> value="No">Drink
					</td>
				</tr>
				<tr>
					<td class="txt">Price</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('food_price'); ?></div>
						<input type="text" name="food_price" value="<?php echo set_value('food_price'); ?>"/>
					</td>
				</tr>
			</table> 
		</div>
		
		
		<!--
		============================
		STEP 3
		============================
		-->
		<div id="step3">
			<table>
				
				<tr>
					<td class="txt">Eat all you can</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('feat_eat'); ?></div>
						<input type="radio" name="feat_eat" <?php echo set_radio('feat_eat', 'Yes'); ?> value="Yes">Yes
						<input type="radio" name="feat_eat" <?php echo set_radio('feat_eat', 'No'); ?> value="No">No
					
					</td>
				</tr>
				<tr>
					<td class="txt">Bottomless drink</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('feat_drink'); ?></div>
						<input type="radio" name="feat_drink" <?php echo set_radio('feat_drink', 'Yes'); ?> value="Yes">Food
						<input type="radio" name="feat_drink" <?php echo set_radio('feat_drink', 'No'); ?> value="No">Drink
					</td>
				</tr>
				<tr>
					<td class="txt">Smoking</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('feat_smoke'); ?></div>
						<input type="radio" name="feat_smoking" <?php echo set_radio('feat_smoking', 'Yes'); ?> value="Yes">Food
						<input type="radio" name="feat_smoking" <?php echo set_radio('feat_smoking', 'No'); ?> value="No">Drink
					</td>
				</tr>
				<tr>
					<td class="txt">Prive room(s)</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('feat_room'); ?></div>
						<input type="radio" name="feat_room" <?php echo set_radio('feat_room', 'Yes'); ?> value="Yes">Food
						<input type="radio" name="feat_room" <?php echo set_radio('feat_room', 'No'); ?> value="No">Drink
					</td>
				</tr>
				<tr>
					<td class="txt">Wifi</td>
					<td class="inputs">
						<div class="error_wrap"><?php echo form_error('feat_wifi'); ?></div>
						<input type="radio" name="feat_wifi" <?php echo set_radio('feat_wifi', 'Yes'); ?> value="Yes">Food
						<input type="radio" name="feat_wifi" <?php echo set_radio('feat_wifi', 'No'); ?> value="No">Drink
					</td>
				</tr>		
			</table>
		</div>
		
		
		<!--
		============================
		BUTTON NEXT
		============================
		-->
		<div class="button_wrapper">
			<ul class="clearfix">
				<li><input type="submit" name="step1" value="Next"/></li>
			</ul>
		</div>
	</form>
	</div>
</div>