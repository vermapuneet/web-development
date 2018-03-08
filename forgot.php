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
		function checkForm(form)
  {
    if (grecaptcha.getResponse() == "")
	{
    alert("please click on recaptcha");
	form.g-recaptcha.focus;
	 return false;
  }
 
    re = /^\w+$/;
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
		</div>
		<!-- //header-ends -->
	<div class="main-content">
		<!--left-fixed -navigation-->
		
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1">Forgot Password</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4>Forgot your Password ! <br> Fill the Registered Email ID below and get a Password reset link to your mail.</h4>
					</div>
					<div class="login-body">
						<form action="#" method="POST">
							<input type="text" class="user" name="mail" placeholder="Enter your Registered Email ID" required="">
							<div class="form-group" >
                               <div class="g-recaptcha"  required data-sitekey="6Lfl60IUAAAAAENJypfTbrajT-H1usYZtzDPx1vO"/></div><br>
							<input type="submit" name="submit" value="Send Registration link">
							<div class="forgot-grid">
								
								
								<div class="clearfix"> </div>
							</div>
						</form>
						<?php
						
if(isset($_POST['submit']))
{ 
 $host="localhost";
	 $username="root";  //id4338612_root
	 $pass="";  //root123
	 $db_name="project"; 
	$conn=new mysqli($host,$username,$pass,$db_name);
		if($conn->connect_errno)
		{
			die("database connection failed".$conn->connect_errno);
		}
 $mail=$_POST['mail'];
 
 $query=$conn->query("select email,pass from signup where email='$mail'");
	$query->fetch_array(MYSQLI_ASSOC);
 if($query->num_rows!=0) 
 {
  $row=$query->fetch_array(MYSQLI_ASSOC);
  $to=$row['email'];
  $subject='Remind password';
  $message='Your password : '.$row['pass']; 
  $headers='From:drakashti@gmail.com';
  $host = "drakashti@gmail.com";
$username ="name";
$password = "pass";
  $m=mail($to,$subject,$message,$headers);
 
  if($m)
  {
    echo'Check your inbox in mail';
  }
  else
  {
   echo'mail is not send';
  }
 }
 else
 {
  echo'You entered mail id is not present';
 }
}
?>
					</div>
				</div>
				
			
			</div>
		</div>
		<!--footer starts ends-->
		
		<div id="footer"></div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>.
<script src='https://www.google.com/recaptcha/api.js'></script>
</html>