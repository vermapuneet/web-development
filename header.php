<?php
include("class/users.php");
$email=$_SESSION['email'];
$pf=new users;
$pf->users_profile($email);

?>
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
</head> 

<body>
	
		
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--logo -->
				<div class="logo">
					<a href="index.php">
						<h1>Test-Series</h1>
						<span>Quiz</span>
					</a>
				</div>
						<div style="position: relative; left: 300px;top:20px;">
							<a href="home.php"><i class="fa fa-book nav_icon"></i>Select Test</a>
						&emsp;
						<a href="login.php"><i class="fa fa-book nav_icon"></i>Admin Login</a>
						&emsp;
							<a href="compose.php"><i class="fa fa-envelope nav_icon"></i>Feedback</a>
					</div>
			
				<div class="clearfix"> </div>
			</div>
			
			<div class="header-right">
				
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
								<?php
                               foreach($pf->data as $guest)	{ ?>						
									<span class="prfil-img"><img src="image/<?php echo $guest['img'];?>" alt="" width="30px" height="25px" /> </span> 
									<div class="user-name">
										<p><?php echo $guest['name'];?></p>
										<span>Learner</span>
							   </div><?php } ?>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li> 
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			
		</div>
	

</body>
</html>