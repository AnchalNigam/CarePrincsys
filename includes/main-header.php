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
				<li><a href="newsfeed.php" class="smoothScroll">News Feed</a></li>
				<li><a href="#overview" class="smoothScroll">Overview</a></li>
				<li><a href="#program" class="smoothScroll">Programs</a></li>
				<?php if(isset($_SESSION['login'])==0) { ?>
				<li><a href="registration.php" class="smoothScroll">Register</a></li>
				<?php } ?>
				<li><a href="#venue" class="smoothScroll">Venue</a></li>
				<li><a href="#sponsors" class="smoothScroll">Sponsors</a></li>
				
				<li><a href="#contact" class="smoothScroll">Contact</a></li>
				<?php if(isset($_SESSION['login'])!=0) {  ?>
				<li><a href="profile.php" class="smoothScroll">Hi! <?php echo $_SESSION['username']; ?></a></li>
				<li><a href="logout.php" class="smoothScroll">Logout</a></li>
				
				<?php }
				else{ ?>
					<li><a href="login.php" class="smoothScroll">Login</a></li>	
					<?php }	?>
			</ul>

		</div>

	</div>
</div>
