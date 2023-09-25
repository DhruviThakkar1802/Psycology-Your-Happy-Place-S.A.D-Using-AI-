<?php
	session_start();
	date_default_timezone_set('Asia/Kolkata');
	require 'dbconfig/config.php';
	
	$cid=$_SESSION['ChatId'] ;
		
		
	
		$added_on=date('Y-m-d h:i:s');
		
		$result='Welcome to world no 1 Online Counselling Therapy With AI Chatbot Psychologists Anytime, Anywhere, Any device..' ;
        mysqli_query($con,"insert into message(ChatId,message,added_on,type) values('$cid','$result','$added_on','bot')");
			
	$added_on=date('Y-m-d h:i:s');
		
		$result='Hello  '.$_SESSION['Name'];
        mysqli_query($con,"insert into message(ChatId,message,added_on,type) values('$cid','$result','$added_on','bot')");
		
		
		$added_on=date('Y-m-d h:i:s');
		
		$result='How Old Are You ?' ;
        mysqli_query($con,"insert into message(ChatId,message,added_on,type) values('$cid','$result','$added_on','bot')");		
						
		echo "<script type='text/javascript'> document.location = 'homepage.php'; </script>";	
?>