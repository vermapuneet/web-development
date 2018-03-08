<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->


    <title>Test Series Login</title>

<script>
            $(document).ready(function(){
              
                $("#footer").load("footer.php");
               
            });
          
        </script>
</head> 

<body>
	<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--logo -->
				<div class="logo">
					<a href="index.php">
						<h1>Test-Series</h1>
						<span>Quiz</span>
					</a>
				</div>
						
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left">
				<div class="profile_details">	
				<div class="user-name">
					<p>Admin    &nbsp;    <font color="black"> | </font> </style></p>			
										</div>
					</div>			
				</div>
				
				<div class="profile_details">		

				<div class="user-name">
									<p><a href="index.php">User Login &emsp;</a></p>
										
									</div>
				</div>
				
				
			</div>								
				
				
				
				<div class="clearfix"> </div>				
			
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
	<div class="main-content">
		<!--left-fixed -navigation-->
		
	
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Admin Login</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Welcome to Test Series admin login </h4>
					</div> <?php 
							    if(isset($_GET['run']) && $_GET['run']=="failed") 
							   { 
								  
								   echo "Incorrect credentials";
							   }
							   ?>
					<div class="login-body">
						<form method="post" action="adminpanel.php">
							<input type="text" class="user" name="e" placeholder="Enter your email" required="">
							<input type="password" name="p" class="lock" placeholder="password">
							<input type="submit" name="Sign In" value="Sign In">
							<div class="forgot-grid">
								<div class="forgot">
									<a href="forgot.php">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
				
			
			</div>
		</div>
		<!--footer starts ends-->
		
		<div id="footer"></div>
        <!--//footer-->
	
	<!-- Classie -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>