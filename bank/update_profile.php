<?php
include("config.php");
session_start();

if(!isset($_SESSION['username']))
{
	header("Location:../index.php");
}
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
					<li><a  href="home.php">Home</a></li>
					<li><a class="active" href="update_profile.php">Update Profile</a></li>
                    <li><a href="view_donor.php">View Donor</a></li>
                    <li><a href="Add_donor.php">Donor Registration</a></li>
                   
					<li><a  href="blooddonate.php">Blood Donated</a></li>
                    <li><a href="view_donation.php">View Donation</a></li>
                    <li><a href="view_request.php">View Request</a></li>
					   <li><a href="search.php">Search</a></li>
					<li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting <span class="caret"></span></a>
                   <ul class="dropdown-menu">
						<li> <a href="Change_password.php">Change Password</a></li>
					
                    	<li><a href="logout.php">Logout</a></li>
                        </ul><!--<li class="dropdown">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="typo.html">Short Codes</a></li>
						<li><a href="icons.html">Icons Page</a></li>
					  </ul>
					</li>-->
                 
				
                    
                    
                   
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
				<h2 class="agile-inner-title">Update Profile</h2>
				<div class="w3-about-top">
				<div class="col-md-2 w3ls-about-top-left-grid"></div>
                <div class="col-md-8 w3ls-about-top-left-grid">
					<div class="panel panel-primary" style="color:#000">
  					<div class="panel-heading" align="center" style="font-size:24px">Update Profile</div>
  					<div class="panel-body">
                    <?php
						$q="select * from blood_bank where email='".$_SESSION['email']."' and username='".$_SESSION['username']."'";
						$r=mysqli_query($con,$q);
						$row=mysqli_fetch_array($r);
						extract($row);
						?>
    					<form method="post" enctype="multipart/form-data" id="registrationForm">
                        <table class=" table table-bordered table-responsive" style="color:#000">
                        <tr><td>Type</td><td><input type="text" class="form-control validate[required]" name="type" value="<?php echo $row['type']; ?>"></td></tr>
                         <tr><td>Bankname</td><td><input type="text" class="form-control validate[required]" name="bankname" value="<?php echo $row['bankname']; ?>"></td></tr>
                          <tr><td>Contact_person</td><td><input type="text" class="form-control validate[required]" name="contact_person" value="<?php echo $row['contact_person']; ?>"></td></tr>
                         
                            <tr><td>Contact No</td><td><input type="text" class="form-control validate[required]" name="contactno" value="<?php echo $row['contactno']; ?>"></td></tr>
                             <tr><td>Email</td><td><input type="text" class="form-control validate[required]" name="email" value="<?php echo $row['email']; ?>"></td></tr>
                             <tr><td>Address</td><td><textarea class="form-control validate[required]" name="address" cols="2" rows="2" style="height:50px"><?php echo $row['address']; ?></textarea></td></tr> 
                             <tr><td>State</td><td><input type="text" class="form-control validate[required]" name="state" value="<?php echo $row['state']; ?>"></td></tr> 
                              <tr><td>District</td><td><input type="text" class="form-control validate[required]" name="district" value="<?php echo $row['district']; ?>"></td></tr> 
                              <tr><td>Taluka</td><td><input type="text" class="form-control validate[required]" name="taluka" value="<?php echo $row['taluka']; ?>"></td></tr> 
                               <tr><td>License</td><td><input type="text" class="form-control validate[required]" name="license" value="<?php echo $row['license']; ?>"></td></tr> 
                                <tr><td>Username</td><td><input type="text" class="form-control validate[required]" name="username" value="<?php echo $row['username']; ?>"></td></tr> 
                        
                        <tr><td colspan="2" align="center"><input type="submit" name="save" value="Update Profile" class="btn btn-success"> &nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Clear" class="btn btn-danger"></td></tr>
                        </table>
                        </form>
                        <?php
						
						if(isset($_POST['save']))
						{
								 /*?>$name=$_FILES['photo']['name'];
$size=$_FILES['photo']['size'];
$type=$_FILES['photo']['type'];

$temp=$_FILES['photo']['tmp_name'];
	if($name)
		{
					$upload_dir = '../profile/';
					$imgExt = strtolower(pathinfo($name,PATHINFO_EXTENSION)); // get image extension
					$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
					$userpic = rand(1000,1000000).".".$imgExt;
					unlink($upload_dir.$row['img']);
					move_uploaded_file($temp,$upload_dir.$userpic);
		}
		else
		{

					$userpic=$row['img'];			
		}<?php */
		$sql='update blood_bank set type="'.$_POST['type'].'",bankname="'.$_POST['bankname'].'"
		,contact_person="'.$_POST['contact_person'].'"
		,contactno="'.$_POST['contactno'].'"
		,email="'.$_POST['email'].'"
		,state="'.$_POST['state'].'"
		,district="'.$_POST['district'].'",taluka="'.$_POST['taluka'].'"
		,license="'.$_POST['license'].'"
		,username="'.$_POST['username'].'" where email="'.$_SESSION['email'].'"';
		echo $sql;
		$res2=mysqli_query($con,$sql);
		if($res2)
		{
							echo "<script>";
							echo "alert('Profile Updated Sucessfully');";
							echo "window.location.href='update_profile.php';";
							echo "</script>";
		}
		else
		{
							echo "<script>";
							echo "alert('Profile Not Inserted ');";
							echo "window.location.href='update_profile.php';";
							echo "</script>";
		}
					}
						?>
  					</div>
					</div>
					
				</div>
				<div class="col-md-2 w3ls-about-top-left-grid"></div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<?php /*?><!-- team -->
			<div class="w3layouts-team-bg">
		<div class="container">
		<div class="w3ls-team">
			<h3>Our Team</h3>
			<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth.</p>
		</div>
		<div class="agile-its-about-grid1">
			<div class="col-md-4 w3l-member-team">
			<div class=" bottom-team">
				<div class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/mem1.jpg" alt="" />
						<div class="b-wrapper">
									<div class="b-animate b-from-top    b-delay03 ">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>	
									</div>
								</div>
	                      </div>
				</div>
				<h4>Michael Clerk</h4>
				<span>CEO</span>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>	
			</div>
			<div class="col-md-4 w3l-member-team">
				<div class=" bottom-team">
				<div class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/mem2.jpg" alt="" />
						<div class="b-wrapper">
									<div class="b-animate b-from-top    b-delay03 ">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>	
									</div>
								</div>
	                      </div>
				</div>
				<h4>John Smith</h4>
				<span>Manager</span>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>	
			</div>
			<div class="col-md-4 w3l-member-team">
				<div class="bottom-team">
				<div class="b-link-stripe b-animate-go  thickbox">
					<img class="img-responsive" src="images/mem3.jpg" alt="" />
						<div class="b-wrapper">
									<div class="b-animate b-from-top    b-delay03 ">
									<ul>
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>	
									</div>
								</div>
	                      </div>
				</div>
				<h4>Christopher</h4>
				<span>Asst. Manager</span>
				<i class="fa fa-quote-left" aria-hidden="true"></i>
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium,
				Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>	
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
	</div>	
	<!-- //team -->
	<!-- advantages -->
	<div class="agile-info-advantages">
		<div class="container">
			<h3>Our Advantages</h3>
			<p class="vel">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
			<div class="w3-agileits-our-advantages-grids">
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>1.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>2.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>3.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>4.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>5.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3layouts-our-advantages-grid">
					<div class="col-xs-3 w3l-our-advantages-grd-left">
						<p>6.</p>
					</div>
					<div class="col-xs-9 w3l-our-advantages-grd-right">
						<h4>voluptate velit esse quam pariatur</h4>
						<p>Vel illum qui dolorem eum fugiat quo voluptas 
							nulla pariatur eum iure reprehenderit.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //advantages --><?php */?>
		</section>
</div>
		
		<!--clients-->
			<div class="w3layouts-clients" style="background:yellowgreen">
				<div class="container">
					<h3>SOME OF OUR CLIENTS</h3>
					<div class="flex-slider">
						<ul id="flexiselDemo1">			
							<li>
								<img src="../images/nabh-green.png" alt=""/>
							</li>
							
							<li>
								<img src="../images/cbbsslogo.png" alt=""/>
								
							</li>
							<li>
								<img src="../images/central.png" alt=""/>
							</li>
							<li>
								<img src="../images/web.png" alt=""/>
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