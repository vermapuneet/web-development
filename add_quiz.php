<?php
include("class/users.php");
$quiz=new users;
extract($_POST);
$qus=htmlentities($qus);
$option1=htmlentities($op1);
$option2=htmlentities($op2);
$option3=htmlentities($op3);
$option4=htmlentities($op4);
$array=[$option1,$option2,$option3,$option4];
$answer=array_search($ans,$array);
$query="insert into questions values ('','$qus','$option1','$option2','$option3','$option4','$answer','$cat')";
if($quiz->add_quiz($query))
{
	$quiz->url("adminpanel.php?msg=run");
	//echo "Data inserted Successfully";
}
?>