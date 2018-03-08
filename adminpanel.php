<?php
include("class/users.php");
$email=$_SESSION['email'];
$profile=new users;
$active=$profile->active_user($email);
$users=$profile->user();
extract($_POST);
$category=$profile->cat_show();
//print_r($users);
?>
<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">

	
<!--//end-animate-->

<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
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
									<p><a href="logout.php">Logout &emsp;</a></p>
										
									</div>
				</div>
				
				
			</div>								
				
				
				
				<div class="clearfix"> </div>				
			</div>
			
	
		
		<div class="main-content">
		<div class="container"><br><br><br><br>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Add Questions</a></li>
    <li><a data-toggle="tab" href="#menu2">All Users</a></li>
    <li><a data-toggle="tab" href="#menu3">Active Users</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <center> <h2> WELCOME ADMIN </h2></center>
    </div>
    <div id="menu1" class="tab-pane fade">
      <!-- main content start-->
		<div id="page-wrapper">
		<!-- //header-ends -->
       <div class="main-page signup-page">
	   <h3 class="title1">ADD QUESTIONS</h3>
       

         <div class="sign-up-row widget-shadow">
         <div class="sign-u">
          <div class="table-responsive">
            <table class="table table-striped">
			<?php
			if(isset($_GET['msg']) && !empty($_GET['msg']))
				echo "<i><P><b>Data inserted successfully !</b></p></i>";
			?>
			
	<form method="post" action="add_quiz.php">
	
		<div class="form-group">
		  <label for="text">Question</label>
		  <input type="text" class="form-control" name="qus" placeholder="Enter question">
		</div>
		<div class="form-group">
		  <label for="text">option1</label>
		  <input type="text" class="form-control"  name="op1"  placeholder="Enter option1">
		</div>
		<div class="form-group">
		  <label for="text">option2</label>
		  <input type="text" class="form-control"  name="op2" placeholder="Enter option2">
		</div>
		<div class="form-group">
		  <label for="text">option3</label>
		  <input type="text" class="form-control"  name="op3" placeholder="Enter option3">
		</div>
		<div class="form-group">
		  <label for="text">option4</label>
		  <input type="text" class="form-control"  name="op4" placeholder="Enter option4">
		</div>
		<div class="form-group">
		  <label for="pwd">Answer</label>
		  <input type="text" class="form-control"  name="ans" placeholder="Enter answer">
		</div>
		<div class="form-group">
	
		
		<select class="form-control" id="sell" name="cat">
		<option value="" >choose category</OPTION>
		
		
		<?php
	
		foreach($category as $c)
		{
			
			echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
			
		}
	   ?>
	   </select>
</div>
   
	<center>	<button type="submit" class="btn btn-warning">Submit</button></center>
  </form>
  
              </tbody>
            </table>
          </div>
		  </div>
		 </div>
        </div>
     </div>
    </div>
    <div id="menu2" class="tab-pane fade">
	<h3><center>All Users</center></h3>
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
	
	  <?php
  foreach($users as $users)
  { ?>
	  
  
      <tr>
	 
        <td><?php echo $users['id'];?></td>
        <td><?php echo $users['name'];?></td>
		<td><?php echo $users['email'];?></td>
		<td><img src="image/<?php echo $users['img'];?>" alt="" width="30px" height="25px" /></td>
      </tr>
      <?php     }?>
    </tbody>
	
  </table>
 
  
  
    </div>
    <div id="menu3" class="tab-pane fade">
     
    <h3><center>Active Users</center></h3>
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
      </tr>
    </thead>
    <tbody>
	
	  <?php
  foreach($active as $users)
  { ?>
	  
  
      <tr>
	 
        <td><?php echo $users['id'];?></td>
        <td><?php echo $users['name'];?></td>
		<td><?php echo $users['email'];?></td>
		<td><img src="image/<?php echo $users['img'];?>" alt="" width="30px" height="25px" /></td>
      </tr>
      <?php     }?>
    </tbody>
	
  </table>
 
  
	
	  </div>
  </div>
</div>

		
		
   </div>
   
  </body>
</html>
