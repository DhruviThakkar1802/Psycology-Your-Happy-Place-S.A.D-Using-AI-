<?php
date_default_timezone_set('Asia/Kolkata');

	session_start();
	
	require 'dbconfig/config.php';


$txt=mysqli_real_escape_string($con,$_POST['txt']);
//echo '<script type="text/javascript"> alert("'.$_SESSION['flag'].'") </script>';

if(isset($_SESSION['flag']))
{
echo '<script type="text/javascript"> alert("inside") </script>';
$id=$_SESSION['PQId'];
$id++;
$sql="select * from chatbot_hints where id ='$id' ";

$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0)
{
     //while ($row = $res -> fetch_row()) 
				
				//{
    // $_SESSION['QId']= $row[0];
	//echo '<script type="text/javascript"> alert("'.$_SESSION['QId'].'") </script>';
	//$html=$_SESSION['QId'].$row[2];
               //  }
				 
				 
	$row=mysqli_fetch_assoc($res);
	
	if($txt=="Yes" ||$txt=="yes" ||$txt=="no" ||$txt=="No" )
	{
		$_SESSION['PQId']=$row['id'];
		$_SESSION['flag']=1;
		echo '<script type="text/javascript"> alert("'.$_SESSION['PQId'].'") </script>';
	
	$html=$_SESSION['PQId'].$row['reply'];
	}
	else
	{   $_SESSION['flag']=null;
		$html=$row['reply'];
	}
	

}
}
else
{
$sql="select * from chatbot_hints where question like '%$txt%'";

$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res)>0)
{
     //while ($row = $res -> fetch_row()) 
				
				//{
    // $_SESSION['QId']= $row[0];
	//echo '<script type="text/javascript"> alert("'.$_SESSION['QId'].'") </script>';
	//$html=$_SESSION['QId'].$row[2];
               //  }
				 
				 
	$row=mysqli_fetch_assoc($res);
	
	if($txt=="Yes" ||$txt=="yes" ||$txt=="no" ||$txt=="No" )
	{
	$_SESSION['PQId']=$row['id'];
		echo '<script type="text/javascript"> alert("'.$_SESSION['PQId'].'") </script>';
	$_SESSION['flag']=1;
	$html=$_SESSION['PQId'].$row['reply'];
	}
	else
	{  
		$html=$row['reply'];
	}
	

}

else
{
	$html="Sorry not be able to understand your Request at this moment .. <br />I'M improving my knowledge base with your request  ".$_POST['txt'];
}

}

$added_on=date('Y-m-d h:i:s');
$cid=$_SESSION['ChatId'];
mysqli_query($con,"insert into message(ChatId,message,added_on,type) values('$cid','$txt','$added_on','user')");
$added_on=date('Y-m-d h:i:s');
mysqli_query($con,"insert into message(ChatId,message,added_on,type) values('$cid','$html','$added_on','bot')");
echo $html;
echo " ";


?>


<!--
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>

	<link href="style.css" rel="stylesheet">
</style>
<a href="#"><small><input name="invalid"  type="button" id="admin_btn" value="Invalid?"></small></a>

<body>

</body>
</html>-->


