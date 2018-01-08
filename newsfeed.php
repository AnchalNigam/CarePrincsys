<?php 

session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
include('config.php');



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
			<a href="#" class="navbar-brand">Care Princsys</a>
		</div>

		<div class="collapse navbar-collapse">

			<ul class="nav navbar-nav navbar-right">
				<li><a href="profile.php">Name of User</a></li>
				<li><a href="newsfeed.php">Home</a></li>
				<li><a href="#"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Donate Now</button></a></li>
				<li><a href="logout.php">Logout</a></li>
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
					<script> fetchinternational(); </script>
					 <div id="international" class="tab-pane fade in active">
					 
					<div id="news1">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news2">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news3">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news4">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news5">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
				</div><!--international end-->	
				<script> fetchnational(); </script>
				<div id="national" class="tab-pane fade">
					<div id="news1">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news2">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news3">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news4">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news5">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
				</div><!--national end-->	
				<script> fetchmedical(); </script>
				<div id="medical" class="tab-pane fade">
					<div id="news1">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em></em></div><br/>
					<div class="news-info"><p></p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news2">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news3">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news4">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news5">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
				</div><!--medical end-->	
				<script> fetcheducation(); </script>
				<div id="education" class="tab-pane fade">
					<div id="news1">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news2">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news3">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news4">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news5">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
				</div><!--education end-->	
				<script> fetchentertainment(); </script>
				<div id="entertainment" class="tab-pane fade">
					<div id="news1">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news2">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news3">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news4">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
					<div id="news5">
					<div class="news-title text-info"></div><!--News title-->
					<!--News info here-->
					<div class="pub-date pull-right"><em>News Time, Date </em></div><br/>
					<div class="news-info"><p>At D. E. Shaw India, we stand at the intersection of Finance and Technology. Our firm has been built in part by attempting to do what other companies might consider impossible, or never imagine at all. The technology groups work on a variety of projects, including real-time financial data-feed infrastructure, high performance middleware, interactive trading systems,  opportunities outside of core investing given its technology strength.</p>
					</div><!--If News Conatins any image then display it
					<img src="images/register-bg.jpg" class="img img-thumbnail">-->
					<hr>
                    </div>
				</div><!--entertainment end-->	
					
				</div><!-- end tab content-->
			  </div>
			</div>
			<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 thumbnail" style="background-color: white;">
				<label style="color: green;">Write / Upload a new Post</label>
				<form action="#" method="post" enctype="multipart/form-data">
					<textarea rows="7" style="resize: none;color:green;" cols="55" class="thumbnail" placeholder="Decription of the Post. . ."></textarea>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<input type="file" name="picture" value="Post Now">	
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						Donation Requires<select id="need">
							
							<option>Yes</option>
							<option>NO</option>
						</select>
					</div>
					<div>
						<input type="submit" name="submit" value="Post Now" class="btn btn-xs btn-success">
					</div>				
				</form>
				<hr>

				<!-- All the latest post will be shown here -->
				<div>
					<br>
					<div class="col-lg-6">
						<a href="profile of user" style="font-size:16px;">Name of user 1 who shared Post</a>
					</div>
					<div class="col-lg-6">
						<p>Date , Time of Post</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
						<img src="images/program-img3.jpg" alt="Image conatains this post" class="thumbnail">
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
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Donate Now</button>
						<hr>	
					</div>
					<br>
					<div class="col-lg-6">
						<a href="profile of user" style="font-size:16px;">Name of user 2 who shared Post</a>
					</div>
					<div class="col-lg-6">
						<p>Date , Time of Post</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
						<img src="images/program-img3.jpg" alt="Image conatains this post" class="thumbnail">
						<!--If post contains requirment Donation the Display this Button-->
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Donate Now</button>
						<hr>	
					</div>
					<br>
					<div class="col-lg-6">
						<a href="profile of user" style="font-size:16px;">Name of user 3 who shared Post</a>
					</div>
					<div class="col-lg-6">
						<p>Date , Time of Post</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
						<img src="images/program-img3.jpg" alt="Image conatains this post" class="thumbnail">
						<!--If post contains requirment Donation the Display this Button-->
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Donate Now</button>
						<hr>	
					</div>
					<br>
					<div class="col-lg-6">
						<a href="profile of user" style="font-size:16px;">Name of user 4 who shared Post</a>
					</div>
					<div class="col-lg-6">
						<p>Date , Time of Post</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
						<img src="images/program-img3.jpg" alt="Image conatains this post" class="thumbnail">
						<!--If post contains requirment Donation the Display this Button-->
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Donate Now</button>
						<hr>	
					</div>
					<br>
					<div class="col-lg-6">
						<a href="profile of user" style="font-size:16px;">Name of user 5 who shared Post</a>
					</div>
					<div class="col-lg-6">
						<p>Date , Time of Post</p>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few implementation dependencies as possible<br><br>
						<img src="images/program-img3.jpg" alt="Image conatains this post" class="thumbnail">
						<!--If post contains requirment Donation the Display this Button-->
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Donate Now</button>
						<hr>	
					</div>

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
		        <form method="post" action="#">
		          <div class="form-group">
		            <label for="name">Name</label>
		            <input type="text" class="form-control" id="name" placeholder="Enter Name" required="" onchange="validate_name()"/>
		            <p id="vname"></p>
		          </div>
		          
		          <div class="form-group">
		            <label for="email">Email address</label>
		            <input type="email" class="form-control" id="email" placeholder="Enter email" required="" onchange="validate_email()"/>
		            <p id="vmail"></p>
		          </div>
		          
		          <div class="form-group">
		            <label for="address">Address</label>
		            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" onchange="validate_address()"/>
		          </div>
		          
		          <div class="form-group">
		            <label for="phone">Phone Number</label> 
		            <div class="input-group">
		               <div class="input-group-addon" style="font-size: 15px;font-weight: bold;">+91</div>
		               <input type="integer" class="form-control" id="phone" placeholder="" maxlength="10" required="" onchange="validate_phone()" />
		            </div>
		          </div>
		          
		          <div class="form-group">
		            <label for="amount">Donation Amount</label>
		              <div class="btn-toolbar" style="padding-bottom: 10px;">  
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(100)">100</button>
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(500)">500</button>
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(1000)">1000</button>
		                <button type="button" class="btn btn-primary btn-lg active" onclick="showamount(0)">Other</button>
		              </div>
		              <div style="display: none;" id="amt" >
		                    <div class="input-group">
		                       <div class="input-group-addon" style="font-size: 15px;font-weight: bold;">&#8377;</div>
		                       <input type="integer" class="form-control" id="inp" onchange="validate_amount()" required=""/>
		                    </div>
		              </div>
		         </div>
		          <div class="form-group">
		            <label for="comment">Donation Comment</label>
		            <input type="text" class="form-control" id="comment" required="" onchange="validate_comment()"/>
		          </div>
		          <button type="submit" class="btn btn-success" id="pay" disabled="">Proceed to pay</button>
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