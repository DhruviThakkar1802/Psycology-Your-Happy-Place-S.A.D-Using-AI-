<?php
require('Admintop.inc.php');
require('functions.inc.php');
$username='';
$password='';
$email='';
$mobile='';

$msg='';


if(isset($_POST['submit']))
{
	$username=get_safe_value($con,$_POST['username']);
	
	$password=get_safe_value($con,$_POST['password']);
	
	$update_sql="insert into  chatbot_hints (question,reply) values ('$username','$password') ";
	mysqli_query($con,$update_sql);
	echo '<script type="text/javascript"> alert("KB Details Added.. Redirect to  Page") </script>';
							echo "<script type='text/javascript'> document.location = 'AddKB.php'; </script>";
	
	}
	
	
	

?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>ADD KNOWLEDGE BASE  FORM</strong><small> </small></div>
                        <form method="post" enctype="multipart/form-data">
							<div class="card-body card-block">
							   
								
								<div class="form-group">
									<label for="username" class=" form-control-label">ADD ASK QUESTION</label>
									<input type="text" name="username" placeholder="Enter Question" class="form-control" required value="<?php echo $username?>">
								</div>
								<div class="form-group">
									<label for="password" class=" form-control-label">ADD AI CHATBOT REPLAY FOR QUESTION</label>
									<input type="text" name="password" placeholder="Enter Chatbot Answer" class="form-control" required value="<?php echo $password?>">
								</div>
								
								
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">ADD KB</span>
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