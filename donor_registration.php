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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
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


</head>
<body>
	<div class="w3-slider">	
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
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">									                         mail@example.com</a></li>
					</ul>
				</div>
				<div class="logo text-center">
					<h1><a href="index.php">Online Blood Bank</a></h1>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</header>
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

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a class="active" href="donor_registration.php">Donor Registration</a></li>
                    <li><a href="send_request.php">Send Request</a></li>
                    <li><a href="view_request.php">View Request</a></li>
					<li><a href="camp.php">Camps</a></li>
					<li><a href="login.php">Log In</a></li>
                    <li><a href="search.php">Search</a></li>
                    <li><a href="contact.php">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>
		<div class="wthree-main-content">
		<section class="agileits about-page">
			<div class="container">
				<h2 class="agile-inner-title">Donor Registration</h2>
				<div class="w3-about-top">
				<div class="col-md-2 w3ls-about-top-left-grid"></div>
                <div class="col-md-8 w3ls-about-top-left-grid">
					<div class="panel panel-primary" style="color:#000">
  					<div class="panel-heading" align="center" style="font-size:24px">Donor Registration</div>
  					<div class="panel-body">
<script type="text/javascript">
$(document).ready(function(){
  $("#state").change(function(){
        var state = $("#state option:selected").val();
		
        $.ajax({
            type: "POST",
            url: "data.php", 
            data: { state : state } 
        }).success(function(result){
            $("#district").html(result);
        });
    });
});
$(document).ready(function(){
  $("#district").change(function(){
	  var state = $("#state option:selected").val();
        var district = $("#district option:selected").val();
		
        $.ajax({
            type: "POST",
            url: "loadSubject.php", 
            data: { district : district,state:state } 
        }).success(function(result){
            $("#city").html(result);
        });
    });
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> <!----This link is important for dependent drop drop----------------->
    			<form method="post" enctype="multipart/form-data" id="registrationForm">
                <table class=" table table-bordered table-responsive" style="color:#000">
                <tr><td>Donor Name</td><td><input type="text" class="form-control validate[required]" name="donor_name"></td></tr>
                <tr><td>Gender</td><td><input type="radio" name="gender" value="Male" checked="checked">Male&nbsp;&nbsp;&nbsp;<input                type="radio" class="" name="gender" value="Female">Female</td></tr>
                <tr><td>Age</td><td><input type="text" class="form-control validate[required]" name="age"></td></tr>
                <tr><td>Mobile No</td><td><input type="text" class="form-control                   					              			validate[optional,custom[integer],minSize[10],maxSize[12]]" name="mobile_no"></td></tr>
                <tr><td>Blood Group</td><td><select name="blood_group" class="form-control validate[required]">
                <option>-------Select Bloodgroup-------</option>
						<?php
						$q="select * from bloodgroup";
						$r=mysqli_query($con,$q);
						while($row=mysqli_fetch_array($r))
						{
							?>
                            <option value="<?php echo $row['bloodgroupname'] ?>"><?php echo $row['bloodgroupname'] ?></option>
                            <?php
						}
						?>
                 </td></tr>
                 <tr><td>Address</td><td><textarea name="address"  class="form-control"></textarea></td></tr>
                 <tr><td>State</td>
                 <td>
                    <select class=" c form-control validate[required] " name="state"  id="state">
                        <option value="" selected="selected">--Select state--</option>
                        <?php
						require 'config.php';
						$sql="select DISTINCT state from statecity";
						$result=mysqli_query($con,$sql) or die(mysqli_error());
						while($row=mysqli_fetch_array($result))
						{?>
							<option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
						<?php }
						?>
                       
                    </select>
                </td>
            </tr>
            <tr>
                <td>District</td>
                 <td>
                    <select class="form-control validate[required]" id="district" name="district">
                        <option value="" selected="selected">--Select District--</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Taluka</td>
                <td>
                    <select class="form-control validate[required]" name="city" size="1" 
                    id="city">
		            <option value="" selected="selected" >--Taluka--</option>
		            </select>
                </td>
            </tr>
            <tr><td>Email</td><td><input type="email" class="form-control validate[required,custom[email]]" name="email"></td></tr>
           <tr><td>Password</td><td><input type="password" class="form-control validate[required,minSize[6]]" name="password" ></td></tr>
            <tr><td>Confirm Password</td><td><input type="password" class="form-control         validate[required,minSize[6],equals[txt_password]]" name="cpassword"></td></tr>
            <tr><td>Profile Image</td><td><input type="file" class="form-control" name="photo"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" name="save" value="Doner Registration" class="btn btn-success">             &nbsp;&nbsp;&nbsp;<input type="reset" name="reset" value="Clear" class="btn btn-danger"></td></tr>
  </table>
</form>
                        <?php
						if(isset($_POST['save']))
						{
								$name=$_FILES['photo']['name'];
								$size=$_FILES['photo']['size'];
								$type=$_FILES['photo']['type'];
								$temp=$_FILES['photo']['tmp_name'];
								move_uploaded_file($temp,"profile/".$name);
						
						$query="insert into donor_registration(donor_name,gender,age,mobile_no,blood_group,address,state,district,city,email,password,cpassword,img,type)values('".$_POST['donor_name']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['mobile_no']."','".$_POST['blood_group']."','".$_POST['address']."','".$_POST['state']."','".$_POST['district']."','".$_POST['city']."','".$_POST['email']."','".$_POST['password']."','".$_POST['cpassword']."','".$name."','".$type."')";
						
						$res=mysqli_query($con,$query) or die(mysqli_error($con));
						if($res)
						{
							echo "<script>";
							echo "alert('Record Inserted Successfully');";
							echo "window.location.href='donor_registration.php';";
							echo "</script>";
						}
						else
						{
							echo "<script>";
							echo "alert('Record Not Inserted ');";
							echo "window.location.href='donor_registration.php';";
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