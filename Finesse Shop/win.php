<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users_database";
session_start();
$name = $_SESSION['name'];
$pass = $_SESSION['pass'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE users_database SET tickets=tickets-1 WHERE password=$pass";

if (mysqli_query($conn, $sql)) {
    ;
} else {
      Header("Location:Home_invalid.php");
}

$update = "INSERT INTO prize1 (username, password) VALUES ('$name', '$pass')";
if (mysqli_query($conn, $update)) {
    Header("Location:Home_valid.php");
} else {
      Header("Location:Home_invalid.php");
}


mysqli_close($conn);
?>

