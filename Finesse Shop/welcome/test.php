<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_database";

$errmsg_arr = array();
$errflag = false;

$name = $_POST['username'];
$pass = $_POST['password'];

// database connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

if($name == '') {
	$errmsg_arr[] = 'You must enter your Username';
	$errflag = true;
}
if($password == '') {
	$errmsg_arr[] = 'You must enter your Password';
	$errflag = true;
}
 
// query
$result = $conn->prepare("SELECT username, password FROM users_database WHERE username= '$name' AND password= '$pass'");
$result->execute();
$rows = $result->fetch(PDO::FETCH_NUM);
if($rows > 0) {
header("location: home.php");
}
else{
	$errmsg_arr[] = 'Username and Password are not found';
	$errflag = true;
}
if($errflag) {
	$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
	session_write_close();
	header("location: index.php");
	exit();
}


# close the connection
$DBH = null;

?>