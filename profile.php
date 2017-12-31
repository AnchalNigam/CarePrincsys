<?php
session_start();
	include_once('includes/header.php');
	include('config.php');
	$error="";
	$success="";
	if(isset($_POST['upload'])){
	$profile_image=$_FILES['pic']['name'];
	$profile_image_tmp=$_FILES['pic']['tmp_name'];
    move_uploaded_file($profile_image_tmp,"admin/userprofile_images/$profile_image");
	$sql=mysqli_query($bd, "update user set proimage='$profile_image' where id='".$_SESSION['id']."'");
		
	}
	if(isset($_POST['submit'])){
		$current=$_POST['c_pwd'];
		$new=$_POST['n_pwd'];
		$confirm=$_POST['nc_pwd'];
		$sql=mysqli_query($bd,"SELECT password FROM user where password='".md5($current)."' && id='".$_SESSION['id']."'");
		$row=mysqli_fetch_array($sql);
		$fetchpass=$row['password'];
		if($fetchpass!=(md5($current))){
			$error="Current Password does not match!!";
		}
		elseif($new!=$confirm) {
			$error="Password and Confirm Password Field does not match!!";
			
			
		}
		else{
			$con=mysqli_query($bd,"update user set password='".md5($new)."' where id='".$_SESSION['id']."'");
			if($con){
				$success="Paasword Changed Successful!!";
			}
			else{
				$error="Sorry!Something went wrong!!";
			}
			
		}
}
$successdetails="";
$errordetails="";
if(isset($_POST['detailsupdate'])){
	$mob=$_POST['inp_mob'];
	$address=$_POST['inp_addr'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$query=mysqli_query($bd,"update user set contact='$mob',address='$address',city='$city',state='$state' where id='".$_SESSION['id']."'");
	if($query){
		$successdetails="Profile Information Successfully Updated!!";
		
	}
	else{
		$errordetails="Sorry!Something went wrong!!";
		
	}
	
}
?>

<!-- =========================
    PROFILE SECTION   
============================== -->

<section>
	<div class="container">
		<div class="row thumbnail">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
				<div class="image">
				<!--Show Image Here-->
				<br>
				<?php $query=mysqli_query($bd,"select proimage from user where id='".$_SESSION['id']."'"); 
				$row=mysqli_fetch_array($query);
				 if(empty($row['proimage'])) { ?>
				<img class="thumbnail" src="images/noimage.png">
				 <?php }
                  else{				 ?>
				  <img class="thumbnail" src="admin/userprofile_images/<?php echo $row['proimage']; ?>">
				  <?php } ?>
				<form action="profile.php" method="post" enctype="multipart/form-data">
					<div class="col-lg-6">
						<input type="file" name="pic" id="aa" required>	
					</div>
					<div class="col-lg-6">
						<input type="submit" style="position: relative;right: 5px;" class="btn btn-xs btn-info" name="upload" value="Change Profile" >		
					</div>
				</form>	
				</div>				
			</div>
			<?php $query=mysqli_query($bd,"select * from user where id='".$_SESSION['id']."'");
			      $row=mysqli_fetch_array($query);?>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
				<br>
				<h3><label><?php echo $row['fullname']; ?></label></h3>
				<label>Occupation : <?php echo $row['occupation']; ?></label>
				<h4>Email :</h4><p><?php echo $row['email']; ?></p>
				
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
				<br><br>
				<div>
					<label>Domain : <p>Webkit browsers use the choose file terms. The solutions below are simple for this problem.</p></label>
				</div>
				<button class="btn btn-sm btn-default" onclick="changePassword()">Change Password</button><br><br>
					<p id="para">Click above button to change your account password</p>
					<form action="profile.php" method="post" style="display: none;" id="form">
						<input type="text" required name="c_pwd" style="border-radius: 2px;" placeholder="Current Password" required><br><br>
						<input type="text" required name="n_pwd" style="border-radius: 2px;" placeholder="New Password" minlength="8" maxlength="25"
					title="Password should be between 8 - 25 letters"><br><br>
						<input type="text" required name="nc_pwd" style="border-radius: 2px;" placeholder="Confirm New Password" required><br><br>
						<input type="submit" name="submit" value="Update"><p id="para">Click to Update password</p>
					</form>		
<?php if(!empty($error)) 
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oops!</strong>	<?php echo $error;?>
									</div>
<?php } ?>	
<?php if(!empty($success)) 
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo $success;?>
									</div>
<?php } ?>					
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail" style="background-color: white;">
				<br>

				<label>Email :<p id="email"><?php echo $row['email']; ?></p></label><br>
				<label>Type of user :<p id="type">
				<?php $val=$row['type']; 
				   if($val==1){
					  echo "Normal"; 
				   }
				   else if($val==2) {
					  echo "Ambassador"; 
				   }elseif($val==3) {
					   echo "Donor";
				   }
				   else{
					   echo "Influencer";
				   }
				
				?></p></label><br>
				<label>Mobile Number :<p id="mob"><?php echo $row['contact']; ?></p></label><br>
				<form action="profile.php" method="post">
					<input style="display: none;border-radius: 2px;" placeholder="Mobile Number" type="text" name="inp_mob" id="inp_mob" pattern="[0-9]+" minlength="10"
				maxlength="10" title="Please only enter digits">
				
				<label style="color: green;">Address :<p id="addr"><?php echo $row['address'].",".$row['city'].",".$row['state']; ?></p></label><br>
					<textarea style="display: none;border-radius: 2px;" cols="30" rows="3" placeholder="Address" type="text" name="inp_addr" id="inp_addr"></textarea><br>
					<label style="display: none;border-radius: 2px;" id="city" >City *
					<input name="city"  required type="text"  placeholder="Kolkata,Bangalore.." class="mycls"  pattern="[A-Za-z ]+" maxlength="65" title="City should only contain letters."></label>
					<label style="display: none;border-radius: 2px;" id="state" >State *
					<input name="state"  required type="text"  placeholder="State" pattern="[A-Za-z ]+" maxlength="65" class="mycls" title="State should only contain letters.">	</label>
					<input type="submit" name="detailsupdate" id="submit" value="Update" class="btn btn-sm btn-default"  style="display: none;">
				</form>

				<button onclick="details()" class="btn btn-default" id="det">Edit Details</button>
				<?php if(!empty($errordetails)) 
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Oops!</strong>	<?php echo $errordetails;?>
									</div>
<?php } ?>	
<?php if(!empty($successdetails)) 
{?>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
									<strong>Well done!</strong>	<?php echo $successdetails;?>
									</div>
<?php } ?>	
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 thumbnail" style="background-color: white;">
				<label style="color: green;">Write / Upload a new Post</label>
				<form action="#" method="post" enctype="multipart/form-data">
					<textarea rows="7" style="resize: none;" cols="55" class="thumbnail" placeholder="Decription of the Post. . ."></textarea>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<input type="file" name="picture" value="Post Now">	
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<input type="submit" name="submit" value="Post Now" class="btn btn-xs btn-primary">
					</div>
					
				</form>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 thumbnail" style="background-color: white;">
				<center><label style="color: blue;">Recent 3 Posts / Posts By</label></center><hr>
				<a href="#">Link for the Post 1</a><hr>
				<a href="#">Link for the Post 2</a><hr>
				<a href="#">Link for the Post 3</a><br>
				<a href="#" class="btn btn-xs btn-info">See More</a>						
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail" style="background-color: white;">
				<br>
				<lable style="color: blue;font-size: 17px;">Recent 10 Donators</lable><hr>
				<p> 1 Donator Name </p> 
				<p> 2 Donator Name </p> 
				<p> 3 Donator Name </p> 
				<p> 4 Donator Name </p> 
				<p> 5 Donator Name </p> 
				<p> 6 Donator Name </p> 
				<p> 7 Donator Name </p> 
				<p> 8 Donator Name </p> 
				<p> 9 Donator Name </p> 
				<p> 10 Donator Name </p> 
			</div>
			<!--Display one Post Here post by this user --> 
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 thumbnail" style="background-color: white;">
				<br>
				<div class="col-lg-6">
					<a href="profile of user" style="font-size:16px;">Name of user who shared Post</a>
				</div>
				<div class="col-lg-6">
					<p>Date , Time of Post</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr>
					Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
					<img src="images/program-img1.jpg" alt="Image conatains this post" class="thumbnail">	
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 thumbnail" style="background-color: white;">
				<center><label style="color: orange;">Recents Admin Notices </label></center><hr>
				<a href="#">Notice by Admin 1</a><br><br>
				<a href="#">Notice by Admin 2</a><br><br>
				<a href="#">Notice by Admin 3</a><br><br>
				<a href="#">Notice by Admin 4</a><br><br>
				<a href="#">Notice by Admin 5</a><br><br>
				<a href="#" class="btn btn-xs btn-default">Show All</a>
			</div>
		</div>
		<div class="row">
			<!--All the Post will be shown here related to/post by User in the decrement order of date time of post -->
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 thumbnail" style="background-color: white;">
				<br>
				<div class="col-lg-6">
					<a href="profile of user" style="font-size:16px;">Name of user who shared Post</a>
				</div>
				<div class="col-lg-6">
					<p>Date , Time of Post</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr>
					Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
					<img src="images/program-img2.jpg" alt="Image conatains this post" class="thumbnail">	
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 thumbnail" style="background-color: white;">
				<br>
				<div class="col-lg-6">
					<a href="profile of user" style="font-size:16px;">Name of user who shared Post</a>
				</div>
				<div class="col-lg-6">
					<p>Date , Time of Post</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr>
					Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
					<img src="images/program-img3.jpg" alt="Image conatains this post" class="thumbnail">	
				</div>
			</div>
			<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 thumbnail" style="background-color: white;">
				<br>
				<div class="col-lg-6">
					<a href="profile of user" style="font-size:16px;">Name of user who shared Post</a>
				</div>
				<div class="col-lg-6">
					<p>Date , Time of Post</p>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr>
					Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
					<img src="images/program-img4.jpg" alt="Image conatains this post" class="thumbnail">	
				</div>
			</div>
		</div>
	</div>
</section>
<script>
	function changePassword(){
			var form = document.getElementById('form');
			var para = document.getElementById('para');
			para.style.display='none';
			form.style.display='block';
	}
	function details(){
			var mob = document.getElementById('mob');
			var addr = document.getElementById('addr');
			var inp_mob = document.getElementById('inp_mob');
			var inp_addr = document.getElementById('inp_addr');
			var city = document.getElementById('city');
			var state = document.getElementById('state');
			var submit = document.getElementById('submit');
			var det = document.getElementById('det');
			mob.style.display='none';
			det.style.display='none';
			addr.style.display='none';
			inp_mob.style.display='block';
			city.style.display='block';
			state.style.display='block';
			inp_addr.style.display='block';
			submit.style.display='block';
	}
</script>
<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2018 Princsys Incorporation</p>

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