<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('include/config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Princsys Inc - Care Princys</title>
       <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
 <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
 <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>	 


    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
<link type="text/css" href="assets/css/theme.css" rel="stylesheet">
 <link type="text/css" href="assets/css/font-awesome.css" rel="stylesheet">
    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
     <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>

</head>
<body>
<?php
$error="";
$success="";
if(isset($_POST['submit']))
{
	$Name=$_POST['name'];
	
	$password=$_POST['password'];
	$answer=$_POST['answer'];
	
		
	
    
	$contact=$_POST['mob_no'];
	if($password==$_POST['con_password']) {
	if($answer=="helpothers") {
	      

		$password=md5($_POST['password']);
		
		$query=mysqli_query($bd,"insert into admin(username,password,contactno) values('$Name','$password','$contact')");
		if($query)
{
   
	echo "<script>
		setTimeout(function() {
            swal({
                title: 'Congratulaions!',
                text: 'You are successfully Become a part of CarePrincsys admin.',
                type: 'success',
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'index.php';
            }, 1000);
        });

		
		</script>";
		


}
else{
    echo "<script>
		setTimeout(function() {
            swal({
                title: 'Oops!',
                text: 'Something Went wrong.Try Again!',
                type: 'error' ,
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'sign.php';
			
            }, 1000);
        });

		
		</script>";

}
	}
	else{
		echo "<script>
				setTimeout(function() {
					swal({
						title: 'Oops!',
						text: 'Security Answer does not match!',
						type: 'error' ,
						confirmButtonText: 'Ok'
					}, function() {
						window.location = 'sign.php';
					
					}, 1000);
				});

		
		</script>";
		
	}
	}
	else{
		echo "<script>
				setTimeout(function() {
					swal({
						title: 'Oops!',
						text: 'Confirm Password and Password does not match!',
						type: 'error' ,
						confirmButtonText: 'Ok'
					}, function() {
						window.location = 'sign.php';
					
					}, 1000);
				});

		
		</script>";
			
	}
	
	
}






?>
<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				

			  	<a class="nav navbar-brand" href="index.php">
			  		Care Princsys
			  	</a>

			
				
					<ul class="nav pull-right">

						<li><a href="index.php">
						Login
						
						</a></li>

						

						
					</ul>
			
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->

     
 
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
				
					<form class="form-vertical" method="post">
						<div class="module-head">
							<h3>Sign Up</h3>
						</div>
						
						<div class="module-body">
						   <div class="control-group">
								<div class="controls row-fluid">
								   
									
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
								<h5>Personal Information</h5>
								    <input class="span12" type="text"  name="mob_no" placeholder="Contact Number"pattern="[0-9]+" minlength="10"
				                      maxlength="10" class="mycls" title="Please only enter digits" required>
									
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
								    <input class="span12" type="text"  name="answer" placeholder="CarePrincsys Security Answer" pattern="[A-Za-z ]+" maxlength="65" title="Hindustane Answer" required>
									
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
								  <h5>Login Information</h5>
										<input class="span12" type="text" name="name" placeholder="User Name" pattern="[A-Za-z ]+" maxlength="65" title="Username should only contain letters. e.g. john" required>
								</div>
							</div>
							 <div class="control-group">
								<div class="controls row-fluid">
								   <input class="span12" type="password" name="password" placeholder="Password" minlength="8" maxlength="25"
					                title="Password should be between 8 - 25 letters" required>
									
								</div>
							</div>
							<div class="control-group">
								<div class="controls row-fluid">
								  <input class="span12" type="password" name="con_password" placeholder="Confirm Password" required>
								</div>
							</div>
							
							<div class="control-group">
								<div class="controls row-fluid">
						<input class="span12 btn btn-primary" type="submit" name="submit" value="Sign-Up">
								</div>
							</div>
						</div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix">
									
									
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--wrapper-->
	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2018 Care Princsys </b> All rights reserved.
		</div>
	</div>
</body>