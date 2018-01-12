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
<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="navbar navbar-top custom-navbar" role="navigation">
	<div class="container-fluid" style="background-color: #1d1919;position:relative;bottom: 20px;">

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
			
			<?php 
			  if(isset($_SESSION['login'])!=0) {  
			 $query=mysqli_query($bd,"select fullname from user where id='".$_SESSION['id']."'"); 
				$row=mysqli_fetch_array($query); ?>
			  <li><a href="profile.php"><?php echo $row['fullname']; ?></a></li> <?php } ?>
			  
				<li><a href="index.php">Home</a></li>
				<li><a href="#"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Donate Now</button></a></li>
				<?php  if(isset($_SESSION['login'])!=0) {  ?><li><a href="logout.php">Logout</a></li> <?php } ?>
				<li><a href="#contact" class="smoothScroll">Contact</a></li>
			</ul>
		</div>

	</div>
</div>
<!-- =========================
    News feed SECTION   
============================== -->

<section>
	<div class="container">
		<div class="row" style="background-color: white;border-radius: 5px;">
			<!--Some Information about care Princstys-->
			<center>
				<p class="text-success">The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength</p>	
			</center>
			
		</div>
		<br>
		<div class="row">
			<!--News Posted By Admin-->
			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 thumbnail" style="background-color: white">
				<div>
					<h4 class="text-success">Recent News Posts</h4><hr>
					<ul class="nav nav-tabs nav-justified">
						<li class="active"><a data-toggle="tab" href="#international" title="International"><i class="fa fa-globe" aria-hidden="true"> </i></a></li>
						<li><a data-toggle="tab" href="#national" title="National"><i class="fa fa-flag" aria-hidden="true"></i></a></li>
						<li><a data-toggle="tab" href="#medical" title="Health and Medical"><i class="fa fa-heartbeat" aria-hidden="true"></i></a></li>
						<li><a data-toggle="tab" href="#education" title="Education"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a></li>
						<li><a data-toggle="tab" href="#entertainment" title="Entertainment"><i class="fa fa-video-camera" aria-hidden="true"></i></a></li>
						
					  </ul>
										
					<div class="tab-content">
					 <?php $feed="http://feeds.bbci.co.uk/news/world/rss.xml";
					 $news=feednews($feed);
					   ?>
					<!--<script> fetchinternational(); </script>-->
					 <div id="international" class="tab-pane fade in active">
					 
					 <?php 
					    for($j=0;$j<5;$j++) {
							?>
					<div id="news1">
					<a href="<?php echo $news[$j][1]; ?>"><div class="news-title text-info"><?php echo $news[$j][0]; ?></div></a><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em><?php echo $news[$j][2];  ?></em></div><br/>
					<div class="news-info"><p><?php echo $news[$j][3]; ?></p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
						<?php } ?>
					
				</div><!--international end-->	
				
				<?php $feed="https://timesofindia.indiatimes.com/rssfeedstopstories.cms";
					 $news=feednews($feed);
					   ?>
				<div id="national" class="tab-pane fade">
					<?php 
					    for($j=0;$j<5;$j++) { ?>
							<div id="news1">
					<a href="<?php echo $news[$j][1]; ?>"><div class="news-title text-info"><?php echo $news[$j][0]; ?></div></a><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em><?php echo $news[$j][2];  ?></em></div><br/>
					<div class="news-info"><p><?php echo $news[$j][3]; ?></p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
						<?php } ?>
							
				</div><!--national end-->	
				<?php $feed="https://timesofindia.indiatimes.com/rssfeeds/3908999.cms";
					 $news=feednews($feed);
					   ?>
				<div id="medical" class="tab-pane fade">
					<?php 
					    for($j=0;$j<5;$j++) { ?>
							<div id="news1">
					<a href="<?php echo $news[$j][1]; ?>"><div class="news-title text-info"><?php echo $news[$j][0]; ?></div></a><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em><?php echo $news[$j][2];  ?></em></div><br/>
					<div class="news-info"><p><?php echo $news[$j][3]; ?></p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
						<?php } ?>
				</div><!--medical end-->	
				<?php $feed="https://timesofindia.indiatimes.com/rssfeeds/913168846.cms";
					 $news=feednews($feed);
					   ?>
				<div id="education" class="tab-pane fade">
					<?php 
					    for($j=0;$j<5;$j++) { ?>
							<div id="news1">
					<a href="<?php echo $news[$j][1]; ?>"><div class="news-title text-info"><?php echo $news[$j][0]; ?></div></a><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em><?php echo $news[$j][2];  ?></em></div><br/>
					<div class="news-info"><p><?php echo $news[$j][3]; ?></p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
						<?php } ?>
				</div><!--education end-->	
				<?php $feed="https://timesofindia.indiatimes.com/rssfeeds/1081479906.cms";
					 $news=feednews($feed);
					   ?>
				<div id="entertainment" class="tab-pane fade">
					<?php 
					    for($j=0;$j<5;$j++) { ?>
							<div id="news1">
					<a href="<?php echo $news[$j][1]; ?>"><div class="news-title text-info"><?php echo $news[$j][0]; ?></div></a><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em><?php echo $news[$j][2];  ?></em></div><br/>
					<div class="news-info"><p><?php echo $news[$j][3]; ?></p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
						<?php } ?>
				</div><!--entertainment end-->	
					
				</div><!-- end tab content-->
			  </div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 thumbnail" style="background-color: white;">
			<?php if(isset($_SESSION['login'])!=0) {  ?>
				<label style="color: green;">Write / Upload a new Post</label>
				<form action="newsfeed.php" method="post" enctype="multipart/form-data">
					<textarea rows="7" style="resize: none;color:green;" cols="55" class="thumbnail" name="status" required ></textarea> 
					
					<div id="body-bottom">
					   <img src="#"  style="height:auto;width::100%" class="hidden img-responsive" id="preview"/>
					   </div>
					  
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<input type="file"  onchange="readURL(this);" style="display:none;" name="post_image" id="uploadFile" accept=".jpeg,.jpg,.png,.gif" >
                        <img src="images/add.png" style="width:30px;height:30px"></img><a href="#" id="uploadTrigger" name="post_image">Add Photo</a>
						<span class="rule" style="cursor:pointer">**</span>
					</div>
					
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						Donation Requires<select id="need" name="donate" required>
							<option value="">Select</option>
							<option value="yes">Yes</option>
							<option value="no">NO</option>
						</select>
					</div>
					<div >
						<input type="submit" name="post" value="Post Now" class="btn btn-md btn-success">
					</div>				
				</form>
				<hr>
			<?php } ?>
				<!-- All the latest post will be shown here -->
				<div>
					<br>
					<?php $query=mysqli_query($bd,"select posts.*,user.fullname from posts join user on user.id=posts.userid");
                        if(mysqli_num_rows($query)>0) 	{	
                        while($row=mysqli_fetch_array($query)) {						?>
					<div class="col-lg-12">
					
						<a href="profile of user" style="font-size:16px;"><?php echo $row['fullname']; ?> has Posted</a>
					</div>
					<div class="col-lg-12">
						<!--<p>Date , Time of Post</p>-->
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<?php echo $row['status']; ?><br><br>
						<?php if(!empty($row['image'])) { ?>
						<img src="admin/post_images/<?php echo $row['image']; ?>" alt="Image conatains this post" class="thumbnail"> <?php } ?>
						<div>
							<button class="btn btn-xs btn-default" onclick="cmt_btn()" id="comment_btn">comment</button>
							<form action="#" method="post" id="comment" style="display: none;">
								<br>
								<input class="form-control" placeholder="Write your comment/views here about this post" type="text" name="comment" id="id"><br>
								<input type="submit" value="Add Comment" class="btn btn-xs btn-default" name="submit">
								<br>
							</form>
						</div>
						
						<!--If post contains requirment Donation the Display this Button--><br>
						<?php if($row['donationNeed']=='yes') { ?>
						<a href="#myModal" class="btn btn-primary btn-sm" data-toggle="modal">Donate Now</a> 
	
  <?php } ?>
						<hr>	
					</div>
					<br>
						<?php } }
                    else{
                    echo "No Posts has been shared!"; }						?>
					
					

				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 thumbnail" style="background-color: white">
			
				<h4 class="text-danger">Recent Speakers</h4><hr>
				<?php $query=mysqli_query($bd,"select speaks.speaks,user.fullname from speaks join user on speaks.userid=user.id limit 3");
                   if(mysqli_num_rows($query)) {	
                    while($row=mysqli_fetch_array($query)) {				   ?>
				
				<div>
					
					<h4 style="font-family:garamond"><em>"<?php echo $row['speaks']; ?>"</em></h4>
				<p class="pull-right"><cite>-<a href=""></a><?php echo $row['fullname']; ?></cite></p>
				</div><br/><br/>
				   <?php }  ?>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><hr>
				   <a href="#" class="text-info">See More</a>		
				   </div>   <?php	}else { ?>
					   <div>
					   <img class=" img-responsive center-block" src="images/sad.jpg" style="width:50%;height:auto">
						<h4 style="font-family:garamond"><em>"You have not shared any views till now!Care Princsys is waiting for it!!"</em></h4>
					   </div>
				<?php   }					   ?>
				
			</div>			
	</div>
</section>
<section>
	<div class="container">
		<!-- Modal -->
		<div class="modal fade-scale" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel" style="color: green">Donar Information</h4>
		      </div>
		      <div class="modal-body">
		        <form action="donatesuccess.php" method="post" >
		          <div class="form-group">
		            <label for="name">Name</label>
		            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required="" pattern="[A-Za-z . ]+" maxlength="65" title="Username should only contain letters. e.g. john"/>
		            <p id="vname"></p>
		          </div>
		          
		          <div class="form-group">
		            <label for="email">Email address</label>
		            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" required=""/>
		            <p id="vmail"></p>
		          </div>
		          
		          <div class="form-group">
		            <label for="address">Address</label>
		            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required=""/>
		          </div>
		          <div class="form-group">
				  <label for="city">City</label>
				  <input name="city" required type="text"  id="city" placeholder="Kolkata,Bangalore.."  pattern="[A-Za-z ]+" maxlength="65" title="City should only contain letters." class="form-control" >
				  </div>
				 <div class="form-group">
				 <label for="state">State</label>
				 <input name="state" required type="text"  id="state" placeholder="State" pattern="[A-Za-z ]+" maxlength="65" title="State should only contain letters." class="form-control" >					
				  </div>
				  		          <div class="form-group">
								  <label for="pin">PinCode</label>
								  <input name="pin" required type="text"  id="pin" placeholder="PinCode" pattern="[0-9]+" minlength="6"
				maxlength="6" class="form-control"  title="Please only enter 6 digits">
				  </div>
		          <div class="form-group">
		            <label for="phone">Phone Number</label> 
		            <div class="input-group">
		               <div class="input-group-addon" style="font-size: 15px;font-weight: bold;">+91</div>
		               <input type="integer" class="form-control" name="phone" id="phone" placeholder="" required="" pattern="[0-9]+" minlength="10"
				maxlength="10" title="Please only enter 10 digits"/>
		            </div>
		          </div>
		          <div class="form-group">
				    <label for="type">Donation Type</label> 
					<select name="donationtype" class="form-control" id="donation_type" onChange="selectdonationtype(this.value);" required>
						<option value="">Choose</option>
						<option value="1">Clothes</option>
						<option value="2">Study Materials</option>
						<option value="3">Money</option>
						<option value="4">Raw Food</option>
					</select>
				  </div>
				  <div class="form-group weight hidden">
				     <label for="weight">Approx. Weight</label>
					  <input type="integer" name="weight" class="form-control" id="phone" placeholder="Approximate weight of your donation items"   pattern="^[a-zA-Z0-9.]+$" 
				class="form-control"  title="Please only enter digits"/><span>Say 250g,1kg..</span>
				  </div>
		          <div class="form-group money hidden">
		            <label for="amount">Donation Amount</label>
					<div class="input-group">
					   <div class="input-group-addon" style="font-size: 15px;font-weight: bold;">Rs.</div>
		               <input type="integer" name="price" class="form-control" id="amount" placeholder="Enter Your Donation Amount" pattern="[0-9,]+" 
				 title="Please only enter only digits">
					   </div>
		              <!--<div class="btn-toolbar" style="padding-bottom: 10px;">  
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(100)">100</button>
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(500)">500</button>
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(1000)">1000</button>
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(0)">Other</button>
		              </div>
		              <div style="display: none;" id="amt" >
		                    <div class="input-group">
		                       <div class="input-group-addon" style="font-size: 15px;font-weight: bold;">&#8377;</div>
		                       <input type="integer" class="form-control" id="inp" onchange="validate_amount()"/>
		                    </div>
		              </div>-->
		         </div>
		          <div class="form-group">
		            <label for="comment">Donation Comment</label>
		            <input type="text" class="form-control" name="comment" id="comment" required="" pattern="[A-Za-z . ]+" maxlength="65" title="Comments should only contain letters"/>
		          </div>
				  <div class="money hidden">
		          <input type="submit" name="pay" value="Proceed to Payment" class="btn btn-success" id="pay" ></div>
				  <div class="weight hidden">
		          <input type="submit" name="donate" value="Donate" class="btn btn-success" id="donate" ></div>
				  
		        </form>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
  
</div>

</section>


<script>
$('.rule').click(function(){
	swal("Only .jpeg,.jpg,.png,.gif", "File Size should be less than 10 Mb")
	
	
});
$("#uploadTrigger").click(function(){
           $("#uploadFile").click();
        });
		
		function readURL(input) {
                  if (input.files && input.files[0]) {
					  if(!input.files[0].type.match('image.*')){
						  swal("Only jpeg,jpg,png,gif allowed");
						  
					  }
					   if(input.files[0].size>10485760){ //10Mb
						   swal("File Size Should be less than 10 Mb");
					  }
					  else{
                      var reader = new FileReader();

                      reader.onload = function (e) {
						  $('img').removeClass('hidden');
                       $('#body-bottom').show();
                          $('#preview').attr('src', e.target.result);
                      }

                      reader.readAsDataURL(input.files[0]);
                  } }
              }
</script>
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
			var submit = document.getElementById('submit');
			var det = document.getElementById('det');
			mob.style.display='none';
			det.style.display='none';
			addr.style.display='none';
			inp_mob.style.display='block';
			inp_addr.style.display='block';
			submit.style.display='block';
	}
	function cmt_btn(){
		
		var a = document.getElementById("comment_btn");
		a.style.display="none";
		var b = document.getElementById("comment");
		b.style.display="block";
	}
</script>
<?php 


$error="";
$success="";
if(isset($_POST['post'])){
	echo "post";
	$status  = $_POST['status'];
	$donate=$_POST['donate'];
    if(!empty($_FILES['post_image']['name'])){
		 $post_image=$_FILES['post_image']['name'];

	$post_image_tmp=$_FILES['post_image']['tmp_name'];
    move_uploaded_file($post_image_tmp,"admin/post_images/$post_image");
	$sql=mysqli_query($bd, "insert into posts(userid,status,image,donationNeed) values('".$_SESSION['id']."','$status','$post_image','$donate')");
	if($sql){
		unset($_POST['post']);
		echo "<script>
		setTimeout(function() {
            swal({
                title: 'Congratulaions!',
                text: 'Posted Successfully.',
                type: 'success',
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'newsfeed.php';
            }, 1000);
        });

		
		</script>";
		
		
	}
	else{
		unset($_POST['post']);
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
	else{
		$sql=mysqli_query($bd, "insert into posts(userid,status,donationNeed) values('".$_SESSION['id']."','$status','$donate')");
	if($sql){
		unset($_POST['post']);
		echo "<script>
		setTimeout(function() {
            swal({
                title: 'Congratulaions!',
                text: 'Posted Successfully.',
                type: 'success',
                confirmButtonText: 'Ok'
            }, function() {
                window.location = 'newsfeed.php';
            }, 1000);
        });

		
		</script>";
		
		
	}
	else{
		unset($_POST['post']);
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
		
		
} }


?>
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

<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>
<script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


</script>


</body>
</html>