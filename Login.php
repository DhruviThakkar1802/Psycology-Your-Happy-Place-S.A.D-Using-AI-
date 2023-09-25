<!doctype html>
<?php
	session_start();
	date_default_timezone_set('Asia/Kolkata');
	require 'dbconfig/config.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <title> Free Psycholog Medical Help AI Chatbot</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	  <style>
	  
@import url(https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap);

body {
    background: #f5f5f5;
}

@media only screen and (max-width: 767px) {
    .hide-on-mobile {
        display: none;
    }
}

.login-box {
    background: url(https://i.imgur.com/73BxBuI.png);
    background-size: cover;
    background-position: center;
    padding: 50px;
    margin: 50px auto;
    min-height: 700px;
    -webkit-box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 60px -5px rgba(0, 0, 0, 0.1);
}

.logo {
    font-family: "Script MT";
    font-size: 54px;
    text-align: center;
    color: #888888;
    margin-bottom: 50px;
}

.logo .logo-font {
    color: #3BC3FF;
}

@media only screen and (max-width: 767px) {
    .logo {
        font-size: 34px;
    }
}

.header-title {
    text-align: center;
    margin-bottom: 50px;
}

.login-form {
    max-width: 300px;
    margin: 0 auto;
}

.login-form .form-control {
    border-radius: 0;
    margin-bottom: 30px;
}

.login-form .form-group {
    position: relative;
}

.login-form .form-group .forgot-password {
    position: absolute;
    top: 6px;
    right: 15px;
}

.login-form .btn {
    border-radius: 0;
    -webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

.login-form .btn.btn-primary {
    background: #3BC3FF;
    border-color: #31c0ff;
}
      .button {
        background-color: #3498db;
        -webkit-border-radius: 12px;
        border-radius: 12px;
        border: none;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: sans-serif;
        font-size: 11px;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color: #3498db;
          box-shadow: 0 0 5px #3498db;
        }
        50% {
          background-color: ##818589;
          box-shadow: 0 0 20px ##818589;
        }
        100% {
          background-color: ##818589;
          box-shadow: 0 0 5px ##818589;
        }
      }
      .button {
        animation: glowing 1300ms infinite;
      }
    </style>
</head>

<body>

    <!-- ################# Header Starts Here#######################--->

    <header id="menu-jk">
        <nav  class="">
            <div class="container">
                <div class="row nav-ro">
                   <div class="col-lg-3 col-md-4 col-sm-12">
                       <img src="assets/images/logo.jpg" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                   </div>
                   <div id="menu" class="col-lg-7 col-md-8 d-none d-md-block no-padding">
                       <ul>
                           <li><a href="index.php">Home</a></li>
                            <li><a href="about_us.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            
                           
                            <li><a href="contact_us.php">Contact Us</a></li>
							<li> <button class="button"><a href="chatbot.php">  <a class="pure-button" href="chatbot.php">
    <i class="fa fa-comment fa-lg"></i>
</a><a href="chatbot.php"> Chat with AI Psychologists Chatbot</a></button></li>
                        </ul>
                   </div>
                   <div class="col-sm-2 d-none d-lg-block">
				 

                      
					 
                   </div>
                </div>
            </div>
        </nav>
    </header>
 	<div class="mosion-vision">
    <div class="container">
        <div class="login-box">
            <form class="myform"  method="post">
            <div class="row">
                <div class="col-sm-6">
                    <br>
                    <h3 class="header-title">LOGIN</h3>
                    <form class="login-form">
                        <div class="form-group">
                            <input name="username" type="text" class="form-control" placeholder="Enter Mobile No " required>
                        </div>
                        <div class="form-group">
                            <input name="password"  type="Password" class="form-control" placeholder="Password" required>
                            <a href="#!" class="forgot-password">Forgot Password?</a>
                        </div>
                        <div class="form-group">
						
						<input name="login" type="submit" id="login_btn" value="LOGIN"  class="btn btn-primary btn-block"/>

                           
                        </div>
                        <div class="form-group">
                            <div class="text-center">New Member? <a href="signup.php">Sign up Now</a></div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 hide-on-mobile">
                    <div id="demo" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>

                        </ul>
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slider-feature-card">
                                   <img src="assets/images/doctt.png" alt="">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="slider-feature-card">
                                   <img src="assets/images/doctt1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Left and right controls -->
                       
                    </div>
                </div>
            </div>
			
				</form>
		
		<?php
		
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
		
			$query="select * from userinfo WHERE MobileNo='$username' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{ 
				// valid
				while ($row = $query_run -> fetch_row()) 
				{
    $_SESSION['Id']= $row[0];
	$_SESSION['Name']= $row[1];
	$_SESSION['Gender']= $row[4];
                 }
				
				$id=$_SESSION['Id'];
				$_SESSION['username']= $username;
				$_SESSION['ChatId'] = mt_rand(1000, 9999);
				
				$cid=$_SESSION['ChatId'] ;
				$name=$_SESSION['Name'];
				$_SESSION['MobileNo']=$username;
				$mno=$_SESSION['MobileNo'];
				$added_on=date('Y-m-d h:i:s');
				
				
						$query= "insert into ChatInfo (ChatId,UserName,MobileNo,ChatStartDate) values('$cid','$name','$mno','$added_on')";
						$query_run = mysqli_query($con,$query);
						
				echo "<script type='text/javascript'> document.location = 'select.php'; </script>";
				
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		
		?>
				
        </div>
    </div>
	 </div>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        Psychology literally means “happiness”. It was conceived with the mission to make the world a happier place.
                    </p>
                    <p>We focus on technologies that promise to reduce costs, streamline processes and speed time-to-market, Backed by our strong quality processes and rich experience managing global... </p>
                </div>
                <div class="col-md-4 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="portfolio" href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="about" href="about_us.php">About us</a><i class="fa fa-angle-right"></i></li>
                        
                        <li><a ui-sref="products" href="#/products">Services</a><i class="fa fa-angle-right"></i></li>
                        
                        <li><a ui-sref="contact" href="contact_us.php">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Psychology <br>
                        Vadodara (District) <br>
                        Gujarat, IND <br>
                        Phone: +91 98985989895 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">info@psychology.in</a><br>
                        Web: <a href="smart-eye.html" class="">www.psychology.in</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="#">2023 &copy; All Rights Reserved | Psychologists Chatbot</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>
   
    </body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>


</html>