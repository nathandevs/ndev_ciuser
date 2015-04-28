<!-- Sub navigation -->
<div id="content_subnavi">
	<ul class="clearfix">
		<li>
			<a href="<?php echo site_url(); ?>advertisement/addadvertisement">
				<i class="fa fa-plus-circle  "></i>
				<p class="txt">Add Advertisement </p>
			</a>
		</li>
	</ul>
</div>
<!-- Sub navigation -->
<!-- LINE SEPARATOR -->
<p class="content_lineseparator"></p>
<!-- LINE SEPARATOR -->

<!-- Main Content -->
<div id="advertisement" class="innerContent">
	<div class="set_rdius">
		<table>
			<tr class="bg_blue">
				<td colspan="6"><p class="tbl_title">Advertisement List</p></td>
			</tr>
		<?php if($qry_result == FALSE){ ?>
			<tr>
				<td colspan="6" class="no_result">No advertisement</td>
			</tr>
			
			
		<?php }else{ ?>
			<tr>
				<th class="col1">Advertisement</th>
				<th class="col2">Action</th>
			</tr>
		<?php foreach($qry_result as $r){ ?>
			<tr>
				<td class="col1"><?php echo $r->display; ?></td>
				<td class="col2">
					<ul class="clearfix">
						<li><a href="<?php echo current_url()."/editpage/?id=".$this->encryption->encode($r->adid)."&p=".$this->encryption->encode('advertisement'); ?>"><i class="fa fa-file-text "></i></a></li>
						<li id="<?php echo $r->adid; ?>"class="<?php echo $r->display; ?> last"><i class="fa fa-trash-o "></i></li>
					</ul>
				</td>
			</tr>
			
		<?php } }?>
			
		</table>
	</div>
</div>