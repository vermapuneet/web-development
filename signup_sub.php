<?php
include("class/users.php");
$register=new users;
extract($_POST);
$img_name=$_FILES['img']['name'];
$tmp_name=$_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name,"image/".$img_name);
$query="insert into `signup` values ('','$n','$e','$p','$img_name')";
if($register->signup($query))
{
	$register->url("signup.php?run=success");
}
//'$img_name','$state','$city','$edu','$pin','$mob','$age','$gender')";

?>