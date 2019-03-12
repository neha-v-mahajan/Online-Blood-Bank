<?php
include("config.php");
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Online Blood Bank System</title>    
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" /><!-- stylesheet -->
<!-- meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business Strategy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script><!-- Required-js -->
<script src="js/bootstrap.min.js"></script><!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //script for smooth drop down-nav -->

<!-- validation-->

<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
	<link rel="stylesheet" href="jQuery-Validation-Engine-master/css/template.css" type="text/css"/>
	<script src="jQuery-Validation-Engine-master/js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			jQuery("#registrationForm").validationEngine();
		});
            
	</script>
    
    
    <link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
</head>
<body>
	<div class="w3-slider">	
	<!-- header -->
	<header>
		<div class="w3layouts-top-strip">
			<div class="container-fluid">
				<div class="w3ls-social-icons">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
				<div class="agileits-contact-info text-right">
					<ul>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+040 185 999</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">mail@example.com</a></li>
					</ul>
				</div>
				<div class="logo text-center">
					<h1><a href="index.php">Online Blood Bank</a></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
	<!-- //header -->
		<div class="w3layouts-inner-banner">
		</div>
	</div>
	<div class="clearfix"></div>
	<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				 <ul class="nav navbar-nav">
					<li><a  href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="donor_registration.php">Donor Registration</a></li>
                    <li><a href="send_request.php" >Send Request</a></li>
                    <li><a href="view_request.php">View Request</a></li>
					<li><a class="active" href="camp.php">Camps</a></li>
					<li><a href="login.php">Log In</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="contact.php">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //navigation -->
		<!-- //main-content -->
		<div class="wthree-main-content">
		<!-- About-page -->
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Blood Donation Camps</h2>
				<div class="w3-about-top">
				<div class="col-md-1 w3ls-about-top-left-grid"></div>
                <div class="col-md-10 w3ls-about-top-left-grid">
                <?php
                @mysqli_query($con,"SET NAMES 'utf8'",$id); /// Its very inportant to display or insert unicode characters in db 
$res = @mysqli_query($con,"SELECT * FROM addcamp",$id);
				while($row = @mysqli_fetch_array($res))
					{
					?>             
 	                <div class="col-md-6 col-md-6 ">
      				<div class="panel panel-primary" style="color:#000">
  					<div class="panel-heading" align="center" style="font-size:24px"><?php echo $row['camp_title']; ?></div>
  					<div class="panel-body">
    					 <p style="font-size:24px; color:#000" >  </p>
                         <a href="admin/upload/<?php echo $row['img'] ?>"data-lightbox="image-1"> <img src="admin/upload/<?php echo $row['img'] ?>" height="250px" width="400px" style="margin:auto; " class="img-responsive img-thumbnail" /></a>
							
                            <div style="font-size:20px; color:#000" > 
                                 Organized By: <?php echo $row['organized_by']; ?>
                            	 State:<?php echo $row['state']; ?><br>
                                 City:<?php echo $row['city']; ?><br>
                                 Details:<?php echo $row['description']; ?><br>
                                 <a href="gallery.php?id=<?php echo $row['id']; ?>"> View Gallery </a>
                                 </div>	
      				 </div>
					</div>
					</div>
                    <?php
					}
					?>
				</div>
				<div class="col-md-1 w3ls-about-top-left-grid"></div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</section>
</div>
		
		<!--clients-->
			<div class="w3layouts-clients" style="background:yellowgreen">
				<div class="container">
					<h3>SOME OF OUR CLIENTS</h3>
					<div class="flex-slider">
						<ul id="flexiselDemo1">			
							<li>
								<img src="images/nabh-green.png" alt=""/>
							</li>
							<li>
								<img src="images/cbbsslogo.png" alt=""/>
							</li>
							<li>
								<img src="images/central.png" alt=""/>
							</li>
							<li>
								<img src="images/web.png" alt=""/>
							</li>
						</ul>
						<script type="text/javascript">
										$(window).load(function() {
											$("#flexiselDemo1").flexisel({
												visibleItems: 4,
												animationSpeed: 1000,
												autoPlay: true,
												autoPlaySpeed: 3000,    		
												pauseOnHover: true,
												enableResponsiveBreakpoints: true,
												responsiveBreakpoints: { 
													portrait: { 
														changePoint:414,
														visibleItems: 1
													}, 
													landscape: { 
														changePoint:667,
														visibleItems: 2
													},
													tablet: { 
														changePoint:991,
														visibleItems: 3
													}
												}
											});
											
										});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>
				</div>
			</div>
			<!--//clients-->
		<!-- /.about-page -->
		<!-- //main-content -->
		<!-- footer -->
			<footer>
			<div class="container">
				
					<div class="col-md-12 w3l-footer-grid" align="center">
						<h4></h4>
						<p>Copy Rights &copy; 2016 - All Rights Reserved By - Online Blood Bank System</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</footer>
		<!-- //footer -->
		<!-- here stars scrolling icon -->
			<script type="text/javascript">
				$(document).ready(function() {				
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<!-- start-smoth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
			<!-- start-smoth-scrolling -->
		<!-- //here ends scrolling icon -->	
</body>
</html>