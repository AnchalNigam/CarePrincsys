<?php 
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('config.php');
include('rss.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Care Princsys-Home</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>	 
 
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>
<script src="js/jquery.js"></script>
<script src="myfunction.js" type="text/javascript">

</script>


</head>

<body style="background-color: #f1eeee;">

<?php
if(isset($_POST['pay'])){
	
	echo "<script>window.location = 'payment.php';</script>";
	
	
	
}
if(isset($_POST['donate'])){
	
	$Name=$_POST['name'];
	
	$email=$_POST['email'];
	
	$address=$_POST['address'];
	
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$phone=$_POST['phone'];
	$donation=$_POST['donationtype'];
	$weight=$_POST['weight'];
	$price=$_POST['price'];
	$comment=$_POST['comment'];
	$sql=mysqli_query($bd, "insert into donation(name,email,address,city,state,pin,phone,type,weight,amount,comment) values('$Name','$email','$address','$city','$state','$pin','$phone','donation','$weight','$price','$comment')");
	if($sql){
		unset($_POST['donate']);
		echo "<script>
		setTimeout(function() {
            swal({
                title: 'Thankyou for your step!',
                text: 'We will be at your door soon.',
                type: 'success',
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'newsfeed.php';
            }, 1000);
        });

		
		</script>";
		
		
		
	}
	else{
		unset($_POST['donate']);
		echo "<script>
		setTimeout(function() {
            swal({
                title: 'Oops!',
                text: 'Something Went wronf.Try Again!.',
                type: 'Failure',
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'newsfeed.php';
			
            }, 1000);
        });

		
		</script>";
	}
		
	
	
	
} 
if(isset($_POST['donation'])){
	$postid=$_POST['postid'];
	$Name=$_POST['name'];
	
	$email=$_POST['email'];
	
	$address=$_POST['address'];
	
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$phone=$_POST['phone'];
	$donation=$_POST['donationtype'];
	$weight=$_POST['weight'];
	$price=$_POST['price'];
	$comment=$_POST['comment'];
	$sql=mysqli_query($bd, "insert into donation(postid,name,email,address,city,state,pin,phone,type,weight,amount,comment) values('$postid','$Name','$email','$address','$city','$state','$pin','$phone','donation','$weight','$price','$comment')");
	if($sql){
		unset($_POST['donation']);
		echo "<script>
		setTimeout(function() {
            swal({
                title: 'Thankyou for your step!',
                text: 'We will be at your door soon.',
                type: 'success',
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'newsfeed.php';
            }, 1000);
        });

		
		</script>";
		
		
		
	}
	else{
		unset($_POST['donation']);
		echo "<script>
		setTimeout(function() {
            swal({
                title: 'Oops!',
                text: 'Something Went wronf.Try Again!.',
                type: 'Failure',
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'newsfeed.php';
			
            }, 1000);
        });

		
		</script>";
	}
		
	
	
	
}
?>

<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>


<!-- =========================
     SCRIPTS   
============================== -->

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>




</body>
</html>
	






