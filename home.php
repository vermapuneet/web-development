<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$profile->users_profile($email);
//print_r($profile->data);
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



<script>
            $(document).ready(function(){
               $("#header").load("header.php");
                $("#footer").load("footer.php");
               
            });
          
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
       
       <h3 class="title1">Test Series</h3>
				<div class="sign-up-row widget-shadow">
   <div class="tab-content">
   
	 <center>  <button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Start Quiz </button></center>
	<br/>
	 <div id="select" class="tab-pane fade">
	 
	 
	<form method="post" action="qus_show.php">
	 
     <select class="form-control" id="select" name="cat">
	   <option>Select category</option>
	  <?php
	 $profile->cat_show();
	 foreach($profile->cat as $category)
	 { ?>
		
    <option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
	<?php } ?>
  </select><br>
  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
  </form>
  
  
  </div>
  </div>
    </div>
  </div>
  </div>
  </div>


<div id="footer"></div>
</div>

 
</body>
</html>
