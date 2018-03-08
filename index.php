<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

if (isset($_POST['submit'])) {
    $secret = '6Lfl60IUAAAAAJIcnornu4vKArE6iik_WPX5758E';
    $response = $_POST['g-recaptcha-response'];
    $remoteip = $_SERVER['REMOTE_ADDR'];
    
    $url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");
    $result = json_decode($url, TRUE);

    if ($result['success'] == 1) {
        echo $_POST['n'];
		
    }
}

?>
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

    <title>Test Series Login </title>
 
<script>
            $(document).ready(function(){
             
                $("#footer").load("footer.php");
               
            });
          
        </script>
	<script>
					/*	function checkPassword(str)
          {
                var re = /(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
                return re.test(str);
            }
				*/	
	function checkForm(form)
	 {
         if (grecaptcha.getResponse() == "")
	{
    alert("please click on recaptcha");
	form.g-recaptcha.focus;
	 return false;
	}
  
    
  }
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
					<p> Guest     &nbsp;    <font color="black"> | </font> </style></p>			
										</div>
					</div>			
				</div>
				
				<div class="profile_details">		

				<div class="user-name">
									<p><a href="signup.php">Sign Up &emsp;</a></p>
										
									</div>
				</div>
				
				
			</div>								
				
				
				
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		
		<!-- //header-ends -->
		<!-- main content start-->
		
			<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">User Login</h3>
				<div class="widget-shadow">
					
					<div class="login-top">
						<h4>Welcome to  Test Series ! <br> Not a Member? <a href="signup.php">  Sign Up »</a> </h4>
					</div>
					 <?php 
							    if(isset($_GET['run']) && $_GET['run']=="failed") 
							   {
								  
								   echo "Incorrect username or password.";
							   }
							   ?>
							   
							   <?php 
							    if(isset($_GET['run']) && $_GET['run']=="out") 
							   {
								  
								  echo "<mark>Logged Out.</mark>";
							   }
							   ?>
					<div class="login-body">
					      <form method="post" role="form" name="myForm" action="signin_sub.php" onsubmit="return checkForm(this);" enctype="multipart/form-data">
						
							<div class="form-group">
								  <label for="email">Email:</label>;
								  <input type="email"  class="form-control" name="e" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email" placeholder="Enter email">
								</div>
							<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" required name="p" id="pwd" placeholder="Enter password">
								</div>
		
							<div class="form-group" >
                               <div class="g-recaptcha"  required data-sitekey="6Lfl60IUAAAAAENJypfTbrajT-H1usYZtzDPx1vO"/>
							   </div>
							<input type="submit" name="Sign In" value="Sign In" >
							<div class="forgot-grid">
								
								<div class="forgot">
									<a href="forgot.php">forgot password?</a>
								</div>
								<div class="clearfix"> </div>
							
						</form>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
		
		
		<!--footer starts ends-->
	<div class="panel-footer">	<center><a href="login.php" data-toggle="tooltip">Admin Login</a> </center></div>
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
<script src='https://www.google.com/recaptcha/api.js'></script>
</html>