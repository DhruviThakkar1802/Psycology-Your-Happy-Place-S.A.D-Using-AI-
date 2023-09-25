<?php
require('top.inc.php');
require('functions.inc.php');


$sql="select * from chatinfo where MobileNo ='{$_SESSION['MobileNo']}' order by ChatStartDate desc";
$res=mysqli_query($con,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body">
				   <h4 class="box-title">Your Chat History</h4>
				  
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th width="2%">ChatID</th>
							   <th width="20%">UserName</th>
							   <th width="20%">ChatDate</th>
							  
							   <th width="26%"></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['ChatId']?></td>
							   <td><?php echo $row['UserName']?></td>
							   <td><?php echo $row['ChatStartDate']?></td>
							   
							  
							   <td>
								<?php
								
								echo "<span class='badge badge-edit'><a href='ViewChat.php?id=".$row['ChatId']."'>View</a></span>&nbsp;";
								
								?>
							   </td>
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