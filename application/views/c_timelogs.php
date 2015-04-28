<!-- Main Content -->
<div id="administrator" class="innerContent">
	<div class="set_rdius">
		<div id="delete_msg"></div>
	
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">User Timestamp</p></td>
			</tr>
			
		<?php 			
			if($qry_result == FALSE){
		?>
			<tr>
				<td colspan="6" class="no_result">No result</td>
			</tr>		
		
		<?php
			}else{
		?>
	
			<tr>
				<th class="col1">Date</th>
				<th class="col2">login</th>
				<th class="col3">logout</th>
			</tr>		
		
		<?php foreach($qry_result as $row){?>
			<tr>
				<td class="col1"><?php echo date('F j, Y',strtotime($row->timelogin)); ?></td>
				<td class="col2"><?php echo date('g:i A',strtotime($row->timelogin)); ?></td>
				<td class="col3">
					<?php 						
					if($row->timelogout != ""){
						echo date('g:i A',strtotime($row->timelogout)); 
					}else{ 
						echo ' Null';
					}
					?>
				</td>
			</tr>			
		<?php 
				}	//end foreach
			}		//end if || else
		?>
		</table>
		
	</div>
</div>