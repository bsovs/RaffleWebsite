<?php 

$usernameup = $_POST['name'];
$passwordup = $_POST['password'];

if($usernameup == "" && $passwordup == "")
	Header ("Location: welcome_get.php");
else
	Header ("Location: Home.php") ;

?>