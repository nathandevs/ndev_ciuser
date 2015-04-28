<a href="<?php echo base_url(); ?>index.php/user/logout/">Logout</a>
<section class="container">
	<table class="table table-striped table-bordered">
		<tr>
	 		<th>ID</th>
	 		<th>Username</th>
	 		<th>Email</th>
	 		<th>Action</th>
	 	</tr>
	 <?php foreach($query as $r) { ?>
	 	<tr>
	 		<td><?php echo $r->id; ?></td>
	 		<td><?php echo $r->username; ?></td>
	 		<td><?php echo $r->email; ?></td>
	 		<th>
	 			<ul class="clearfix">	 			
		 			<li>
			 			<a href="">
			 				<span class="glyphicon glyphicon-pencil"></span>
			 			</a>
			 		</li>
			 		<li>
				 		<a href="">
			 				<span class="glyphicon glyphicon-trash"></span>
			 			</a>
		 			</li>
	 			<ul>
	 		</th>
	 	</tr>
	 <?php } ?>
	</table>
</section>

