<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('config.php');
$error="";
$success="";
if(isset($_POST['submit']))
{
	$Name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['Gender'];
	$address=$_POST['address'];
	
	$city=$_POST['city'];
	$state=$_POST['state'];
	$password=$_POST['password'];
	$user=$_POST['usertype'];
	
		$domain=$_POST['domain'];
	$confirmpass=$_POST['con_password'];
    
	$contact=$_POST['mob_no'];
	
	$occupation=$_POST['occupation'];
	if($confirmpass==$password) {
	 $query1=mysqli_query($bd,"select email from user where email='$email'");
	 
     if(mysqli_num_rows($query1)>0){
        $error="Email is already Registered";
    }
	else{
		$password=md5($_POST['password']);
		$query=mysqli_query($bd,"insert into user(fullname,email,password,gender,state,city,contact,occupation,type,domain,address) values('$Name','$email','$password','$gender','$state','$city','$contact','$occupation','$user','$domain','$address')");
		if($query)
{
   
	$success="You are successfully Become a part of Care Princsys";


}
else{
    $success="Not registered,something went worng";

}
		
	}
	}
	else{
		$error="Password and Confirm Password does not match!!";
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script src="myfunction.js" type="text/javascript">

</script>
<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<style type="text/css">
	h4,span{
		color:black;
	}
	

.hidden{
	display:none;
	
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

<?php include('includes/main-header.php'); ?>
<!-- =========================
     NAVIGATION LINKS     
============================== -->



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

			<div class="wow fadeInUp col-md-5 col-sm-12" style="background-color: white;border-radius: 10px;" data-wow-delay="1s">
				<?php if(!empty($error)){
				echo "<div class='alert alert-danger fade in'>
				<a href='#' class='close' data-dismiss='alert'>&times;</a>
				<strong>$error</strong> </div>"; 
				} ?>
					<?php if(!empty($success)){
				echo "<div class='alert alert-success fade in'>
				<a href='#' class='close' data-dismiss='alert'>&times;</a>
				<strong>$success</strong> </div>"; 
				} ?>
				<form action="registration.php" method="post">
					<h4>Name *</h4>
					<input name="name" required type="text"  id="name" placeholder="Name" pattern="[A-Za-z ]+" maxlength="65" title="Username should only contain letters. e.g. john" class="mycls" >
					<h4>Email *</h4>
					<input name="email" required type="email"  id="email" placeholder="Email Address" class="mycls">
					<h4>Gender</h4>
					<span style="position: relative;bottom: 20px;">Male</span><input name="Gender" required type="radio" value="M" id="email" placeholder="gender" style="position: relative;left: 10px;" required class="mycls">
					<span style="position: relative;bottom: 20px;left:10px">Female</span><input name="Gender" required type="radio"  value="F" id="email" placeholder="gender" style="position: relative;left: 20px;" required class="mycls">
					<h4>Address *</h4>
					<input name="address" required type="text" id="address" placeholder="Your address..." class="mycls">
					<h4>City *</h4>
					<input name="city" required type="text" id="city" placeholder="Kolkata,Bangalore.."  pattern="[A-Za-z ]+" maxlength="65" title="City should only contain letters." class="mycls">
					<h4>State *</h4>
						<input name="state" required type="text"  id="state" placeholder="State" pattern="[A-Za-z ]+" maxlength="65" title="State should only contain letters." class="mycls">					
					<h4>Password *</h4>
					<input name="password" required type="password"  id="password" placeholder="Password" class="mycls" minlength="8" maxlength="25"
					title="Password should be between 8 - 25 letters" >
					<h4>Confirm Password *</h4>
					<input name="con_password" required type="password"  id="con_password" placeholder="Confirm Password" class="mycls" minlength="8" maxlength="25">
					<h4>Type of User</h4>
					<select name="usertype" class="form-control" id="user_type" onChange="selecttype(this.value);" required>
						<option value="">Choose</option>
						<option value="1">Normal</option>
						<option value="2">Ambassador</option>
						<option value="3">Donor</option>
						<option value="4">Influencer</option>
					</select>
					<div class="influencer hidden">
					<h4>Domain</h4>
					<input name="domain" type="text"  id="domain" placeholder="Domain" pattern="[A-Za-z ]+" maxlength="65" title="Domain should only contain letters."  class="mycls">
					</div>
					<h4>Mobile No. *</h4>
					<input name="mob_no" required type="text"  id="mob_no" placeholder="Mobile Number" pattern="[0-9]+" minlength="10"
				maxlength="10" class="mycls" title="Please only enter digits">
					<h4>Occupation *</h4>
					<input name="occupation" required type="text"  id="occupation" placeholder="occupation"  pattern="[A-Za-z ]+" maxlength="65" title="Occupation should not contain digits" class="mycls">
					<br>
					<input type="checkbox" name="checkbox" required>required><label style="margin-left:10px;position: relative;bottom: 18px;color:green;">Accept the <a href="#">Terms and Conditions</a></label>
					

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
<script>
function pass() {
    var password= document.forms["myForm"].password.value.length;
    var con_password = document.forms["myForm"].con_password.value.length;
    if (password != con_password) {
        alert("Password and Confirm Password don't match");
        return false;
    }
    return true;
}
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>