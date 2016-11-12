<?php
session_start();

$comment = $_POST['comment'];
$name = $_SESSION['name'];


if (!(isset($_SESSION['name']) != '')) {
exit(Header("Location:http://localhost/Finesse%20Shop/welcome_get"));
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

$sql = "INSERT INTO comments2 (id, comment, username)
VALUES ('', '$comment', '$name')";

if (mysqli_query($connection, $sql)) {
    Header("Location:http://localhost/Finesse%20Shop/welcome/Leather-GG-belt");
} else {
    Header ("Location:welcome_get_re-signup.php");
}

mysqli_close($connection);
?>
