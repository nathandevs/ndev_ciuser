<!-- Sub navigation -->
<div id="content_subnavi">
	<ul class="clearfix">
		<li>
			<a href="<?php echo site_url(); ?>administrator/adduser">
				<i class="fa fa-plus-circle  "></i>
				<p class="txt">Add User </p>
			</a>
		</li>
	</ul>
</div>
<!-- Sub navigation -->

<!-- LINE SEPARATOR -->
<p class="content_lineseparator"></p>
<!-- LINE SEPARATOR -->

<!-- Main Content -->
<div id="administrator" class="innerContent">
	<div class="set_rdius">
		<div id="delete_msg"></div>
	
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Administrator List</p></td>
			</tr>
			
		<?php 			
			if($qry_result == FALSE){
		?>
			<tr>
				<td colspan="6" class="no_result">No user</td>
			</tr>		
		
		<?php
			}else{
		?>
	
			<tr>
				<th class="col1">User</th>
				<th class="col2">Status</th>
				<th class="col3">Action</th>
			</tr>		
		
		<?php foreach($qry_result as $row){?>
			<tr>
				<td class="col1"><?php echo $row->username; ?></td>
				<td class="col2"><?php echo $row->status; ?></td>
				<td class="col3">
					<ul class="clearfix">
						<li><a href="<?php echo current_url()."/timelogs/?id=".$this->encryption->encode($row->aid); ?>"><i class="fa fa-clock-o "></i></a></li>
						<li><a href="<?php echo current_url()."/editpage/?id=".$this->encryption->encode($row->aid)."&p=".$this->encryption->encode('administrator'); ?>"><i class="fa fa-file-text "></i></a></li>
						<li id="<?php echo $row->aid; ?>" class="<?php echo $row->username;?> <?php echo $row->status; ?> last"><i class="fa fa-trash-o "></i></li>
					</ul>
				</td>
			</tr>			
		<?php 
				}	//end foreach
			}		//end if || else
		?>
		</table>
		
	</div>
</div>