<?php
include("class/users.php");
$f=new users;
extract($_POST);
$query="insert into feedback  values ('','$name','$email','$subject','$feedback')";
if($f->feedback($query))
{
	$f->url("compose.php?run=success");
}

?>