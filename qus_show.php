<?php
include("class/users.php");
$qus=new users;
$cat=$_POST['cat'];// "cat" name is given in home.php for select
$qus->qus_show($cat);
$_SESSION['cat']=$cat;


?>

<!DOCTYPE html>
<html>
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
<!--//Metis Menu -->

<script>
            $(document).ready(function(){
               $("#header").load("header.php");
                $("#footer").load("footer.php");
               
            });
          
        </script>
  <script type="text/javascript">
  
  function timeout()
  {
	  var hours=Math.floor(timeLeft/3600);
	  var minute=Math.floor((timeLeft-(hours*3600)-30)/60);
	  var second=timeLeft%60;
	  var hrs=checktime(hours);
	  var mint=checktime(minute);
	  var sec=checktime(second);
	  if(timeLeft<=0)
	  {
		  clearTimeout(tm);
		  document.getElementById("form1").submit();
	  }
	  else
	  {
		 /* if(minute<10)
		  {
			  minute="0"+minute;
		  }*/
		 document.getElementById("time").innerHTML=hrs+":"+mint+":"+sec; 
	  }
	  timeLeft--;
	  var tm=setTimeout(function(){timeout()},1000);
  }
  function checktime(msg)
  {
	  if(msg<10)
	  {
		  msg="0"+msg;
	  }
	  return msg;
  }
  </script>
</head>
<body onload="timeout()">

	<div class="main-content">
		<!--left-fixed -navigation-->
		
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		
		<div id="header"></div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
       
   
				<div class="sign-up-row widget-shadow">
  <script type="text/javascript">
  var timeLeft=1*60*1;
  </script>
  
  

  <div id="time" style="float:right">timeout</div></h2>
  
  
        <?php 
		$i=1;
		foreach($qus->qus as $qust) { ?>  
        <form action="answer.php" id="form1" method="post">		
               <table class="table table-bordered">
		<thead>
		  <tr class="danger">
			<th><?php echo $i; ?>. <?php echo $qust['question'];?></th>

		  </tr>
		</thead>
			<tbody>
			<?php if(isset($qust['ans1'])) {?>
			  <tr class="info">
				<td>&nbsp;1&nbsp;<input type="radio" value="0" name="<?php echo $qust['id'];?>" />&nbsp;<?php echo $qust['ans1'];?></td>
			  </tr>
			<?php } ?>
			<?php if(isset($qust['ans2'])) {?>
			   <tr class="info">
				<td>&nbsp;2&nbsp;<input type="radio" value="1" name="<?php echo $qust['id'];?>"/>&nbsp;<?php echo $qust['ans2'];?></td>
			  </tr>
			  <?php } ?>
			  <?php if(isset($qust['ans3'])) {?>
			   <tr class="info">
				<td>&nbsp;3&nbsp;<input type="radio" value="2" name="<?php echo $qust['id'];?>"/>&nbsp;<?php echo $qust['ans3'];?></td>
			  </tr>
			  <?php } ?>
			  <?php if(isset($qust['ans4'])) {?>
			   <tr class="info">
				<td>&nbsp;4&nbsp;<input type="radio" value="3" name="<?php echo $qust['id'];?>"/>&nbsp;<?php echo $qust['ans4'];?></td>
			  </tr>
			 <?php } ?>
			 <tr class="info">
				<td><input type="radio" checked="checked" style="display:none" value="no_attempt" name="<?php echo $qust['id'];?>"/></td>
			  </tr>
			</tbody>
	  </table>
	
		<?php $i++; } ?>
		
		 <center> <input type="submit" value="Submit Quiz" class="btn btn-success"/></center>
	  </form>
	  
</div>
</div>
</div>
<div id="footer"></div>
</div>

</div>


</body>
</html>
