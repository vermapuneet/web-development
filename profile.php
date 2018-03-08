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
<?php
include("class/users.php");
$email=$_SESSION['email'];
$info=new users;
$info->users_profile($email);
//print_r($profile->data);
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


    <title>Test Series Profile</title>
  

<script>
            $(document).ready(function(){
               $("#header").load("header.php");
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
	<div class="main-content">
		
		<!-- header-starts -->
		
		<div id="header"></div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1">View and Update Your Profile Here</h3>
				<div class="sign-up-row widget-shadow">
				<form role="form"  method="post" onsubmit="return checkForm(this)" name="myprofile" action="profile_sub.php" enctype="multipart/form-data">
				<?php 
					foreach($info->data as $detail)
					{ ?>
					<h5>Personal Information :</h5>
					<div class="sign-u">
					<?php 
					 if(isset($_GET['run']) && $_GET['run']=="success") 
							 {
								 echo "<mark>Your profile has been updated</mark>";
							 }
						     ?>
						<div class="sign-up1">
							<h4><label for="name">Full Name* :</label>&emsp;<?php echo $detail['name'];?></h4>
						</div>
						<div class="clearfix"> </div>
					</div>
				
				
					<div class="sign-u">
						<div class="sign-up1">
							<h4><label for="email">Email Address* :</label>&emsp;<?php echo $detail['email'];?></h4>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					
					<div class="form-group">
									  <label for="name">Mobile Number:</label>
									  <input type="text"    maxlength="10" pattern="[0-9]{10}" class="form-control" name="mob" id="mob" placeholder="Enter mobile number" required>
									</div>

					
						<div class="form-group">
									  <label for="age">Age:</label>
									  <input type="text"   pattern="[0-9]{2}" maxlength="2"  required  class="form-control" name="age" id="age" placeholder="Enter your age" required>
									</div>
						
						<div class="sign-up">
						<div class="sign-up1">
									  <h4><label for="name">Gender* :</label>&emsp;</h4>
							
								<input type="radio" name="gender" checked value="male" required>
								Male
							
							
								<input type="radio" name="gender"  value="female" required>
								Female		
			</div>
						<div class="clearfix"> </div>
					</div>
					
				
						
					
						
					
					
								<div class="form-group">
								  <label for="pwd">Education:</label>
								  <input type="text"  pattern="[a-zA-Z]{2,35}$" required class="form-control" name="edu" id="pwd" placeholder="Enter password">
								</div>
								
									<div class="form-group">
									  <label for="name">State:</label>
									  <input list="browser"  pattern="[a-zA-Z]{2,30}$" required class="form-control" name="state" id="state" placeholder="Enter State" >
									  <datalist id="browser">
										<option value="Andaman and Nicobar Island">
										<option value="Andhra Pradesh">
										<option value="Arunachal Pradesh">
										<option value="	Assam">
										<option value="Bihar">
										<option value="Chandigarh union territory">
										<option value="Chhattisgarh">
										<option value="Dadra and Nagar Haveli union territory">
										<option value="	Daman and Diu union territory">
										<option value="	National Capital Territory of Delhi union territory">
										<option value="Goa">
										<option value="Gujarat">
										<option value="Haryana">
										<option value="Himachal Pradesh">
										<option value="Jammu and Kashmir">
										<option value="harkhand">
										<option value="Karnataka">
										<option value="Kerala">
										<option value="Lakshadweep union territory">
										<option value="Madhya Pradesh">
										<option value="Maharashtra">
										<option value="Manipur">
										<option value="Meghalaya">
										<option value="Mizoram">
										<option value="Nagaland">
										<option value="Odisha">
										<option value="Puducherry union territory">
										<option value="Punjab">
										<option value="Rajasthan">
										<option value="Sikkim">
										<option value="Tamil Nadu">
										<option value="Telangana">
										<option value="Tripura">
										<option value="Uttar Pradesh">
										<option value="Uttarakhand">
										<option value="West Bengal">
									  </datalist>
									</div>
									<div class="form-group">
									  <label for="name">City:</label>
									  <input type="text" pattern="[a-zA-Z]{2,30}$" required class="form-control" name="city" id="city" placeholder="Enter city" required>
									</div>
									<div class="form-group">
									  <label for="name">Pincode:</label>
									  <input type="text"    maxlength="6" required   pattern="[0-9]{6}" class="form-control" name="pin" id="pin" placeholder="Enter Pincode" required>
									</div>
									
								
								
								<!--<div class="form-group">
								  <label for="pwd">Upload your image</label>
								  <input type="file" class="form-control" name="img" >
								</div>-->
					<?php }?>
					
					<div class="form-group" >
                               <div class="g-recaptcha"  required data-sitekey="6Lfl60IUAAAAAENJypfTbrajT-H1usYZtzDPx1vO"/></div><br>
						 <button type="submit" class="btn btn-primary">Update</button>
					</form>
					</div>
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
</body>

<script src='https://www.google.com/recaptcha/api.js'></script>
</html>