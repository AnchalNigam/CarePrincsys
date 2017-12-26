<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('config.php');
$error="";
$success="";
if(isset($_POST['submit']))
{
   $email=$_POST['email'];
   $password=md5($_POST['password']);
$query=mysqli_query($bd, "SELECT * FROM user WHERE email='$email' and password='$password'");
$num=mysqli_fetch_array($query);
if($num>0)
{
$extra="index.php";
$_SESSION['login']=$_POST['email'];
$_SESSION['id']=$num['id'];
$_SESSION['username']=$num['fullname'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($bd, "insert into userlog(useremail,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
exit();
}
else{
$extra="login.php";
$email=$_POST['email'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
$log=mysqli_query($bd, "insert into userlog(useremail,userip,status) values('$email','$uip','$status')");
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:http://$host$uri/$extra");
$_SESSION['errmsg']="Invalid email id or Password";
exit();
}	
	
	
	
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Care Princsys </title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<style type="text/css">
	h4,span{
		color:black;
	}
</style>
</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>


<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
	<div class="container">

		<!-- navbar header -->
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="index.php" class="navbar-brand">Care Princsys</a>
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#intro" class="smoothScroll">News Feed</a></li>
				<li><a href="#overview" class="smoothScroll">Overview</a></li>
				<li><a href="#program" class="smoothScroll">Programs</a></li>
				<li><a href="registration.php" class="smoothScroll">Register</a></li>
				<li><a href="#venue" class="smoothScroll">Venue</a></li>
				<li><a href="#sponsors" class="smoothScroll">Sponsors</a></li>
				<li><a href="login.php" class="smoothScroll">Login</a></li>
				<li><a href="#contact" class="smoothScroll">Contact</a></li>
			</ul>

		</div>

	</div>
</div>




<!-- =========================
   Login SECTION   
============================== -->
<section id="register" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
				<h2>Login Here</h2>
				<h3>We’re building a pipeline of leaders who understand what it takes to create change in our complex, interconnected world.</h3>
				<p>Our Fellows Program is a one-year leadership development program designed to connect and cultivate a pipeline of social changemakers who are committed to tackling poverty and injustice.</p>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-5" style="background-color: white;border-radius: 10px;" data-wow-delay="1s">
			<?php
				if(!empty($_SESSION['errmsg'])){
					$a=htmlentities($_SESSION['errmsg']);
					echo "<div class='alert alert-success fade in'>
					<a href='#' class='close' data-dismiss='alert'>&times;</a>
					<strong>$a</strong> </div>";
				//echo htmlentities($_SESSION['errmsg']);
				}
				?>
				<?php
				echo htmlentities($_SESSION['errmsg']="");
				?>
				<form action="login.php" method="post">
					<h4>Email *</h4>
					<input name="email" required type="email" class="form-control" id="email" placeholder="Email Address">
					<h4>Password *</h4>
					<input name="password" required type="password" class="form-control" id="password" placeholder="Password">
					
					<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
						<input name="submit" type="submit" class="form-control" id="submit" value="Login">
					</div>
				</form>
			</div>

			<div class="col-md-1"></div>

		</div>
	</div>
</section>




<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2017 Care Princsys</p>

				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				</ul>

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>