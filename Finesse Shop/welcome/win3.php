<?php

session_start();
$name = $_SESSION['name'];


$x = $_POST['entries'];
$p1 = "prize3";
$p = "password";
$u = "username";
$t = "tickets";
$db = "users_database";


if ($x == 0){
	exit(Header("Location:http://localhost/Finesse%20Shop/welcome/"));
}

// Load configuration as an array. Use the actual location of your configuration file
$config = parse_ini_file('../config.ini'); 

// Create connection
$connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);

// Check connection
if($connection === false) {
    // Handle error - notify administrator, log to a file, show an error screen, etc.
	exit(Header("Location:welcome_get"));	
}

function db_connect() {

    // Define connection as a static variable, to avoid connecting more than once 
    static $connection;

    // Try and connect to the database, if a connection has not been established yet
    if(!isset($connection)) {
         // Load configuration as an array. Use the actual location of your configuration file
        $config = parse_ini_file('../config.ini'); 
        $connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);
    }

    // If connection was not successful, handle the error
    if($connection === false) {
        // Handle error - notify administrator, log to a file, show an error screen, etc.
        return mysqli_connect_error(); 
    }
    return $connection;
}
// Create connection
$connection = db_connect();
// Check connection
if (!$connection) {
    die("Connection failed: " );
}

$invalid = "SELECT $t FROM $db WHERE $u= '$name'  ";
$result = mysqli_query($connection, $invalid);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
       $a = $row['tickets'];
	}
}



if ($x > $a){
	exit(Header('Location:http://localhost/Finesse%20Shop/welcome/hackers'));
		}

		
$sql = "UPDATE $db SET tickets=tickets-'$x' WHERE $u= '$name'  ";

if (mysqli_query($connection, $sql)) {
     ;
} else {
      Header("Location:http://localhost/Finesse%20Shop/welcome_get");
}

  $update = "INSERT INTO $p1 ($u) VALUES ('$name')";
while($x >= 1) {
	
if (mysqli_query($connection, $update)) {
    Header("Location:http://localhost/Finesse%20Shop/welcome/snake-and-bee");
} else {
      Header("Location:http://localhost/Finesse%20Shop/welcome_get");
}
   $x--;
} 

mysqli_close($connection);
?>