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
<html lang="en">
<head>
<title>Online Blood Group</title>    
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
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
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
</head>
<body>
	<!-- top-header and slider -->
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
	<!-- main-slider -->
    <ul id="demo1">
    <?php

$query="select * from slider";
$res=mysqli_query($con,$query) or die(mysqli_error($con));
while($row=mysqli_fetch_array($res))
{
?>

    

		
			<li>
			<img src="admin/slider/<?php echo $row['img'] ?>" alt="" />
			<!--Slider Description example-->
			 <div class="slide-desc">
					<!--<h3>Slider Title 1</h3>-->
					<?php echo $row['description'] ?>
			  </div>
			</li>
            <?php
}
?>
			<?php /*?><li><img src="../images/1452193415.jpg" alt="" />
			   <div class="slide-desc">
					<h3>Slider Title 2</h3>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
			  </div>
			</li>
			<li><img src="../images/e5b006d5f832ae5db83c2fc2bdb5a78d_large-1.jpg" alt="" />
				<div class="slide-desc">
					<h3>Slider Title 3</h3>
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature. </p>
				</div>
			</li>
			<li><img src="images/4.jpg" alt="" />
			  <div class="slide-desc">
					<h3>Slider Title 4</h3>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form. </p>
			  </div>
			</li>
			<li><img src="images/5.jpg" alt="" />
				<div class="slide-desc">
					<h3>Slider Title 5</h3>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam. </p>
				</div>
			</li>
			<li><img src="images/6.jpg" alt="" />
			  <div class="slide-desc">
					<h3>Slider Title 6</h3>
					<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was I will a complete account. </p>
			  </div>
			</li><?php */?>
		</ul>
	</div>
	<!-- //main-slider -->
	<!-- //top-header and slider -->
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
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="donor_registration.php">Donor Registration</a></li>
                    <li><a href="send_request.php">Send Request</a></li>
                    <li><a href="view_request.php">View Request</a></li>
					
					<li><a href="camp.php">Camps</a></li>
					<!--<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="typo.html">Short Codes</a></li>
						<li><a href="icons.html">Icons Page</a></li>
					  </ul>
					</li>-->
					<li><a href="login.php">Log In</a></li>
                    <li><a href="search.php">Search</a></li>
                    
                    <li><a href="contact.php">Contact</a></li>
				  </ul>
				</div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		<!-- //navigation -->
		<!-- main-content -->
		<div class="wthree-main-content">
			<!-- Specialize-section -->
			<section class="w3-about text-center">
				<div class="container">
					<h3 class="w3l-title">Welcome</h3>
					<p class="para"></p>
					<div class="col-md-12 ">
						<p align="justify">Blood is universally recognized as the most precious element that sustains life. It saves innumerable lives across the world in a variety of conditions. The need for blood is great - on any given day, approximately 39,000 units of Red Blood Cells are needed. More than 29 million units of blood components are transfused every year. Donate Blood Despite the increase in the number of donors, blood remains in short supply during emergencies, mainly attributed to the lack of information and accessibility. We positively believe this tool can overcome most of these challenges by effectively connecting the blood donors with the blood recipients.</p>
					</div>
					
					<div class="clearfix"></div>
				</div>
			</section>
			<!-- //Specialize-section -->
			
			
			<!-- About Section -->
            <section class="agile-info-about-more content-section alt-bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <h4>Blood bank:</h4>
			<p align="justify">We welcome you to in our  WebSite. If you are a donor , We appreciate you <a href="registration.php">signing up</a> online as a Donor. If you need blood we are happy to serve you. This blood donor list is hosted by <a href="index.php">www.lifesaver.com</a> on behalf of "Life Saver Blood Bank"
as a public service without any profit motive.This is a free service. While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors, 
the Organisers and ICM Computers do not guarantee accuracy of the information contained herein or the suitability of the persons listed as any liability for direct or consequential damage to any person using this blood donor list including 
loss of life or damage due to infection of any nature arising out of blood transfusion from persons whose names have been listed in this website.
We request donors to update contact details regularly.</p>

                        </div><!-- /.col-md-6 -->
                        
                        <div class="col-md-6">
                            <div class="embed-responsive embed-responsive-16by9" align="center">
                              <a href="donor_registration.php"><img src="images/1.png" style="width:300px; height:300px" class="img-responsive"></a>
                            </div>
                        </div><!-- /.col-md-6 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section><!-- /.section -->
			
			
			<?php /*?><!-- NEWS -->
			<div class="wthree-news text-center">
				<div class="container">
					<h3 class="w3l-title">Our News</h3>
					<p class="para">Duis aute irure dolor reprehenderit<span> in voluptate velit</span> esse cillum dolore eu 
					fugiat nulla pariatur. Excepteur sint occaecat.</p>
					<div class="col-md-6 wthree-right">
						<div class="w3-agile-left">
							<div class="work-left">
								<h4>22 july</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-1</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur. Excepteur sint occaecat.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="wel-right">
							<div class="content-item item-image1">
								<a href="single.html"><img src="images/n1.jpg" alt="" /></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 wthree-right no-marg">
						<div class="wel-right2">
							<div class="content-item item-image2">
								<a href="single.html"><img src="images/n2.jpg" alt="" /></a>
							</div>
						</div>
						<div class="w3-agile-left2">
							<div class="work-left">
								<h4>02 Aug</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-2</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur. Excepteur sint occaecat.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
					<div class="col-md-6 wthree-right">
						<div class="w3-agile-left">
							<div class="work-left">
								<h4>12 Sep</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-3</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur. Excepteur sint occaecat.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="wel-right ">
							<div class="content-item item-image1">
								<a href="single.html"><img src="images/n3.jpg" alt="" /></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-6 wthree-right no-marg">
						<div class="wel-right2">
							<div class="content-item item-image2">
								<a href="single.html"><img src="images/n4.jpg" alt="" /></a>
							</div>
						</div>
						<div class="w3-agile-left2">
							<div class="work-left">
								<h4>15 Nov</h4>
							</div>
							<div class="agileits-right text-left">
								<a href="single.html">News post-4</a>
								<p>Duis aute irure dolor reprehenderit in voluptate velit esse cillum dolore eu 
									fugiat nulla pariatur. Excepteur sint occaecat.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //NEWS --><?php */?>

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

		</div>
		<!-- //main-content -->
	<?php /*?>	<!-- contact us -->
	<section class="agileits-contactus">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div>
					<h3 class="w3l-title">Get in touch</h3>
					</div>
					<div class="col-sm-8 w3layouts-agileits">
						<form action="#"  method="get" class="my-form">
						  <div class="form-group">
							<input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
						  </div>
						  <div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
						  </div>
						  <div class="form-group">
							<textarea class="form-control" name="message" id="message" rows="7" cols="25" style="resize:none;" required placeholder="Message"></textarea>
						  </div>
						  
						  <button type="submit" class="btn btn-default btn-block">SEND MESSAGE</button>
						</form>
					</div>
					
					<div class="col-sm-4 w3layouts-agileits">
						<div class="w3layouts-address">
						<h4>Main Office</h4>
				
						<address>
						  <strong class="bold">Company name</strong><br>
						  15-RG, Lorem Ipsum,<br>
						  Main Road, quibusdam et aut<br>
						  <abbr title="Phone">Mobile : </abbr> 0025-89674532<br>
						   <abbr title="Phone">Phone : </abbr> 040-1654321-9
						</address>

						<address>
						  <strong class="bold">Email</strong><br>
						  <a class="mail" href="mailto:info@example.com">info@example.com</a>
						</address>	
						<address>
						  <strong class="bold">We're on social networks</strong><br>
							<div>
							<ul class="agileits-company-social">
								<li class="social-facebook"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
								<li class="social-twitter"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
								<li class="social-dribble"><a href="#" target="_blank" title="dribble"><i class="fa fa-dribbble"></i></a></li>
								<li class="social-google"><a href="#" target="_blank" title="google"><i class="fa fa-google-plus"></i></a></li>
							</ul>
							</div>
						</address>	
						</div>
					</div>
				</div>				
			</div>
		</div>
	</section><?php */?>
	<!-- /.contact us -->
	<!-- footer -->
			<footer>
			<div class="container">
				<!--<div class="w3ls-footer-grids">					
					<div class="col-md-3 w3l-footer-grid">
						<h4>ADDRESS</h4>
						<ul>
							<li>BS Business Strategy</li>
							<li>4111 Deer Haven Drive Greenville, SC 29601 </li>
							<li>Hours: Mon-Fri 9am - 6:00pm</li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>GET IN TOUCH</h4>
						<ul>
							<li>Tel: +1 234-567-890</li>
							<li>Fax: +1 646-216-9789</li>
							<li>Email: <a href="mailto:info@example.com">info@yourdomain.com </a></li>
						</ul>
					</div>
					<div class="col-md-3 w3l-footer-grid">
						<h4>SUBSCRIBE NOW</h4>
						<form action="#" method="post">
							<input type="email" name="email" placeholder="Enter your email" required>
							<input type="submit" value=" ">
						</form>
					</div>-->
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
					/*
						var defaults = {
						containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
						};
					*/
										
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