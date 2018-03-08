<?php
include("class/users.php");
extract($_POST);
$info=new users;
$email=$_SESSION['email'];

$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"image/".$img_name);

$query="INSERT INTO profile values ('','$email','$gender','$state','$city','$edu','$pin','$mob')";
if($info->profile($query))
{
	$info->url("profile.php?run=success");
}
//'$img_name','$state','$city','$edu','$pin','$mob','$age','$gender')";

?>