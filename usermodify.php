<?php
require('Admintop.inc.php');
require('functions.inc.php');
$username='';
$password='';
$email='';
$mobile='';

$msg='';
if(isset($_GET['id']) && $_GET['id']!='')

{
	$image_required='';
	$id=get_safe_value($con,$_GET['id']);
	$res=mysqli_query($con,"select * from userinfo where UserId='$id'");
	$check=mysqli_num_rows($res);
	if($check>0)
	{
		$row=mysqli_fetch_assoc($res);
		$_SESSION['UID']='$id';
		$username=$row['FullName'];
		$email=$row['Gender'];
		$mobile=$row['MobileNo'];
		$password=$row['Password'];
		$status=$row['Status'];
	}
	
	else
	{
		header('location:index.php');
		die();
	}
}

if(isset($_POST['submit']))
{
	$username=get_safe_value($con,$_POST['username']);
	$email=get_safe_value($con,$_POST['email']);
	$mobile=get_safe_value($con,$_POST['mobile']);
	$password=get_safe_value($con,$_POST['password']);
	$status=get_safe_value($con,$_POST['Status']);
	$update_sql="update userinfo set FullName='$username',Password='$password',Gender='$email',MobileNo='$mobile',Status='$status' where UserId='$id'";
	mysqli_query($con,$update_sql);
	echo '<script type="text/javascript"> alert("User Details Updated.. Redirect to User Page") </script>';
							echo "<script type='text/javascript'> document.location = 'UserInfo.php'; </script>";
	
	}
	
	
	

?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>USER PROFILE UPDATE  FORM</strong><small> </small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="username" class=" form-control-label">Username</label>
									<input type="text" name="username" placeholder="Enter username" class="form-control" required value="<?php echo $username?>">
								</div>
								<div class="form-group">
									<label for="password" class=" form-control-label">Password</label>
									<input type="text" name="password" placeholder="Enter password" class="form-control" required value="<?php echo $password?>">
								</div>
								
								<div class="form-group">
									<label for="password" class=" form-control-label">Gender</label>
									<input type="text" name="email" placeholder="Enter email" class="form-control" required value="<?php echo $email?>">
								</div>
								<div class="form-group">
									<label for="categories" class=" form-control-label">Mobile</label>
									<input type="text" name="mobile" placeholder="Enter mobile" class="form-control" required value="<?php echo $mobile ?>">
								</div>
								
								<div class="form-group">
									<label for="categories" class=" form-control-label">Status</label>
									<input type="text" name="Status" placeholder="Enter mobile" class="form-control" required value="<?php echo $status ?>">
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">SUBMIT</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 
		 
         
<?php
require('footer.inc.php');
?>