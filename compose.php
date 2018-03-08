<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
//print_r($profile->data);
?>
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


<!DOCTYPE html>

<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
<meta name="description" content="Test Series.">

<script>
            $(document).ready(function(){
               $("#header").load("header.php");
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
  
    
  }
    
	</script>
</head>
<body>
<body>
	<div class="main-content">
		
		<!-- header-starts -->
		<div id="header"></div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			
				<div class="sign-up-row widget-shadow">
					<div class="panel-default">
					<?php
							 if(isset($_GET['run']) && $_GET['run']=="success") 
							 {
								 echo "<mark>Your Feedback is successfully posted!!</mark>";
							 }
						     ?>
						<div class="panel-heading">
							Compose New Message 
						</div>
						<div class="panel-body">
							<div class="alert alert-info">
								Please fill details to send a new message
							</div>
							<form role="form" class="com-mail" method="post" onsubmit="return checkForm(this)" action="feedback.php">
							<div class="form-group">
								<input type="email" name="toemail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required class="form-control1 control3" placeholder="To :">
								</div>
								<div class="form-group">
						        <input type="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control1 control3" placeholder="Enter your email:">
								</div>
								<div class="form-group">
								<input type="text" name="subject" required="subject" pattern="[a-zA-Z_ ]{2,30}$" class="form-control1 control3" placeholder="Subject :">
								</div>
								<div class="form-group">
								<textarea rows="6" class="form-control1 control2" name="feedback" required="" placeholder="Message :" ></textarea>
								</div>
							 <div class="form-group" >
                               <div class="g-recaptcha"  required data-sitekey="6Lfl60IUAAAAAENJypfTbrajT-H1usYZtzDPx1vO"/></div><br>
                               <button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>	
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
</body>
<script src='https://www.google.com/recaptcha/api.js'></script>
</html>