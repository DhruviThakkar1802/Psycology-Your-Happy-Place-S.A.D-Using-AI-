<?php

require('Admintop.inc.php');

if(isset($_GET['id']) && $_GET['id']!='')

{
	//$image_required='';
	//$id=get_safe_value($con,$_GET['id']);
	$id=$_GET['id'];
	$res=mysqli_query($con,"select * from message where ChatId='$id'");
	
}
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">User Chat </h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>Chat Text</th>
							   <th>Chat Time</th>
							   <th>Chat User</th>
							    <th></th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res))
							{?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							 
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['message']?></td>
							   <td><?php echo $row['added_on']?></td>
							    <td><?php echo $row['type']?></td>
							  
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.inc.php');
?>