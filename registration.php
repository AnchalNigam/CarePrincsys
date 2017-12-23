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
			<a href="#" class="navbar-brand">Care Princsys</a>
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="#intro" class="smoothScroll">News Feed</a></li>
				<li><a href="#overview" class="smoothScroll">Overview</a></li>
				<li><a href="#program" class="smoothScroll">Programs</a></li>
				<li><a href="registration.html" class="smoothScroll">Register</a></li>
				<li><a href="#venue" class="smoothScroll">Venue</a></li>
				<li><a href="#sponsors" class="smoothScroll">Sponsors</a></li>
				<li><a href="login.html" class="smoothScroll">Login</a></li>
				<li><a href="#contact" class="smoothScroll">Contact</a></li>
			</ul>

		</div>

	</div>
</div>




<!-- =========================
   REGISTER SECTION   
============================== -->
<section id="register" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow fadeInUp col-md-7 col-sm-7" data-wow-delay="0.6s">
				<h2>Register Here</h2>
				<h3>We’re building a pipeline of leaders who understand what it takes to create change in our complex, interconnected world.</h3>
				<p>Our Fellows Program is a one-year leadership development program designed to connect and cultivate a pipeline of social changemakers who are committed to tackling poverty and injustice.</p>
			</div>

			<div class="wow fadeInUp col-md-5 col-sm-5" style="background-color: white;border-radius: 10px;" data-wow-delay="1s">
				<form action="#" method="post">
					<h4>Name *</h4>
					<input name="name" required type="text" class="form-control" id="name" placeholder="Name">
					<h4>Email *</h4>
					<input name="email" required type="email" class="form-control" id="email" placeholder="Email Address">
					<h4>Gender</h4>
					<span style="position: relative;bottom: 20px;">Male</span><input name="Gender" required type="radio" id="email" placeholder="gender" style="position: relative;left: 10px;">
					<span style="position: relative;bottom: 20px;left:10px">Female</span><input name="Gender" required type="radio" id="email" placeholder="gender" style="position: relative;left: 20px;">
					<h4>Address</h4>
					<textarea name="intque" type="text" class="form-control" id="firstname" placeholder="Full Address"></textarea>
					<h4>City *</h4>
					<input name="city" required type="text" class="form-control" id="city" placeholder="Kolkata, Bangalore, Delhi etc...">
					<h4>State *</h4>
						<input name="state" required type="text" class="form-control" id="state" placeholder="State">					
					<h4>Password *</h4>
					<input name="password" required type="password" class="form-control" id="password" placeholder="Password">
					<h4>Confirm Password *</h4>
					<input name="con_password" required type="password" class="form-control" id="con_password" placeholder="Confirm Password">
					<h4>Type of User</h4>
					<select name="user_type" class="form-control" id="user_type">
						<option>Choose</option>
						<option>Normal</option>
						<option>Abmassador</option>
						<option>Donor</option>
						<option>Influencer</option>
					</select>
					<h4>Domain (For Influencer Only)*</h4>
					<input name="domain" type="text" class="form-control" id="domain" placeholder="Domain (For Influencer Only)">
					<h4>Mobile No. *</h4>
					<input name="mob_no" required type="text" class="form-control" id="mob_no" placeholder="Mobile Number">
					<h4>Occupation *</h4>
					<input name="occupation" required type="text" class="form-control" id="occupation" placeholder="occupation">
					<input name="confirm" type="radio"><label style="margin-left:10px;position: relative;bottom: 18px;color:green;">Accept the <a href="#">Terms and Conditions</a></label>
					
					<div class="col-md-offset-6 col-md-6 col-sm-offset-1 col-sm-10">
						<a href="login.html" class="btn btn-info">Login</a>
						<input name="submit" type="submit" class="form-control" onclick="return check()" id="submit" value="REGISTER">
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