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

<script>
            $(document).ready(function(){
              
                $("#footer").load("footer.php");
               
            });
          
        </script>
<script>
		
	function checkPassword(str)
  {
    var re = /(?=^.{6,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    if (grecaptcha.getResponse() == "")
	{
    alert("please click on recaptcha");
	form.g-recaptcha.focus;
	 return false;
  }
 
    re = /^\w+$/;
    
    if(form.p.value != "" && form.p.value == form.pc.value) 
	{
		  if(!checkPassword(form.p.value)) 
		  {
			alert("password must be six characters including one uppercase letter, one special character and alphanumeric characters?");
			form.p.focus();
			return false;
		  }
    }
	else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.p.focus();
      return false;
    }
    return true;
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
									<p><a href="index.php">Sign-in &emsp;</a></p>
										
									</div>
				</div>
				
				
			</div>								
				
				
				
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		


		<!--left-fixed -navigation-->
		
		<!--left-fixed -navigation-->

		
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				
				<div class="widget-shadow">
					
										<div class="login-top">
										<h3 class="title1">SignUp Here</h3>
				<p>Give your Quiz and prepare yourself !</p></div>
					
					 <?php
							 if(isset($_GET['run']) && $_GET['run']=="success") 
							 {
								 echo "<mark>Your registration successfully done</mark>";
							 }
						     ?>
							 <div class="login-body">
							 		 <form role="form" name="myForm" method="post" onsubmit="return checkForm(this)" action="signup_sub.php" enctype="multipart/form-data"  >
							  	<div class="form-group">
								  <label for="name">Name:</label>
							 	  <input type="text" pattern="[a-zA-Z_ ]{2,30}$" "required class="form-control" name="n" id="name" placeholder="Enter name">
								</div>
								<div class="form-group">
								  <label for="email">Email:</label>
								  <input type="email"  class="form-control" name="e" pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email" placeholder="Enter email">
								</div>
								

								<div class="form-group">
								  <label for="pwd">Password:</label>
								  <input type="password" class="form-control" required name="p" id="pwd" placeholder="Enter password">
								</div>
								<div class="form-group">
								  <label for="pwd">confirm Password:</label>
								  <input type="password" class="form-control" required name="pc" id="pc" placeholder="Enter password">
								</div>
								<div class="form-group">
								  <label for="pwd">Upload your image</label>
								  <input type="file" class="form-control" name="img" >
								</div>
								
								
								   <div class="form-group" >
                               <div class="g-recaptcha"  required data-sitekey="6Lfl60IUAAAAAENJypfTbrajT-H1usYZtzDPx1vO"/></div>
								<input type="submit" name="Sign Up" value="Sign up" >
							  </form>
					</div>
				</div>
			</div>
		</div>
		<!--footer starts ends-->
		</div>
		<div id="footer"></div>
        <!--//footer-->
	
	
	<!-- Classie -->
		
	<!--scrolling js--><script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>

</html>