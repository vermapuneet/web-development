<?php
include("class/users.php");
$ans=new users;
$answer=$ans->answer($_POST);

?>
<HTML>
<head>

<title>Answer</title>
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
</head>
<body>
	<div class="main-content">
		
		<!-- header-starts -->
		
		<div id="header"></div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="main-page signup-page">
       
	  <h3 class="title1">Your Quiz Result</h3>
       
       <div class="sign-up-row widget-shadow">
      

<?php
$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
$attempt_qus=$total_qus-$answer['no_answer'];
?>


	 
 <table class="table table-bordered">
    <thead>
      <tr class="active">
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr class="warning">
        <td>Attempted Questions</td>
        <td><?php echo $attempt_qus; ?></td>
      </tr>
      <tr class="success">
        <td>Right Answer</td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr class="danger">
        <td>Wrong Answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr class="info">
        <td>Not Attempted</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr class="success">
        <td>My Result</td>
        <td><?php echo($answer['right']*100)/($total_qus)."%";?></td>
      </tr>
    </tbody>
  </table>

</div>
	</div> 
	</div>
	</div>
	</div>
	<div id="footer"></div>
	</div>
</body>
</html>

