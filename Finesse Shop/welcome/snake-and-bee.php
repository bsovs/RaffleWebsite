<!DOCTYPE html>

<html>
<head>

<script src="jquery-1.11.3.min.js"></script>

<title>FinesseShop</title>
<link rel="stylesheet" href="finessecss.css">
<link rel="icon" type="image/png" href="http://localhost/Finesse%20Shop/welcome/icon-f.png"/>

<?php
session_start();

$name = $_SESSION['name'];

if (!(isset ($_SESSION['name']) != '')) {
Header("Location:http://localhost/Finesse%20Shop/welcome_get");
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


?>



</head>


<div id="body">
<body bgcolor="#F9F9F9" background="background4.jpg">


  
  <div id="bg2">
<img src="background2.jpg" id="bg2" width="100%" height="500px">
</div>
  
  <div id="p1">
 <p></p>
  </div>
  <div id="win-in-3">
   <p>Win Prizes <br>In 3 <br>Easy Steps</p>
  </div>

<div class="Gleam2">
<div id="Gleam2">
<a href="Gleam page" target="_blank" title="Premium Belt"><img src="premium-gucci-belt2.jpg" title="Premium Belt"width="300px"  height="300px"id="Premium giveaway"></a>
</div>
<div id="Gleam2text">
<a href="Gleam page" target="_blank" title="Premium Belt">Premium Gucci<br>Belt Giveaway</a>
</div>
</div>

<div class="box3">
<div class="box5">

<div id="comments">
<div id="commentbox">
<?php


// Create connection
$conn = db_connect();
// Check connection
if (!$conn) {
    die("Connection failed: " );
}

$sql = "SELECT * FROM comments3";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "" . $row["id"]. " " . $row["username"]. ": " . $row["comment"]. "<br>";
    }
} else {
    echo "Be the First to Comment!";
}


?>  
</div>
<div id="submitcomment">
<h1>Leave a comment:</h1>
<form action="insertcomment3.php" method="post">
<input type="text" name="comment" />
<input type="submit" />
</form>
</div>
</div>

<div id="news" style="height:40%;width:300px; border:5px solid black;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">


<h1>NEWS</h1>
As you can see, once there's enough text in this box, the box will grow scroll bars... that's why we call it a scroll box! You could also place an image into the scroll box.
texttext texttext texttexttext texttexttext texttext texttext texttext texttext
text texttext text text texttext texttext texttext texttext texttext texttexttext
text text text text text text texttext texttext text texttexttexttexttexttexttext
texttext texttexttext texttext texttext texttext texttext texttexttexttext text
texttext texttext texttexttext texttexttext texttext texttext texttext texttext
text texttext text text texttext texttext texttext texttext texttext texttexttext
text text text text text text texttext texttext text texttexttexttexttexttexttext
texttext texttexttext texttext texttext texttext texttext texttexttexttext text texttext texttext texttexttext texttexttext texttext texttext texttext texttext
text texttext text text texttext texttext texttext texttext texttext texttexttext
text text text text text text texttext texttext text texttexttexttexttexttexttext
texttext texttexttext texttext texttext texttext texttext texttexttexttext text texttext texttext texttexttext texttexttext texttext texttext texttext texttext
text texttext text text texttext texttext texttext texttext texttext texttexttext
text text text text text text texttext texttext text texttexttexttexttexttexttext
texttext texttexttext texttext texttext texttext texttext texttexttexttext text texttext texttext texttexttext texttexttext texttext texttext texttext texttext
text texttext text text texttext texttext texttext texttext texttext texttexttext
text text text text text text texttext texttext text texttexttexttexttexttexttext
texttext texttexttext texttext texttext texttext texttext texttexttexttext text
texttext texttext texttexttext texttexttext texttext texttext texttext texttext
text texttext text text texttext texttext texttext texttext texttext texttexttext
text text text text text text texttext texttext text texttexttexttexttexttexttext
texttext texttexttext texttext texttext texttext texttext texttexttexttext text
texttext texttexttext texttext texttext texttext texttext texttexttexttext text
texttext texttexttext texttext texttext texttext texttext texttexttexttext text

</div>

</div>
</div>

<div class="box2">
<div id="numberCircle1">1</div>

<div id="numberCircle2">2</div>

<div id="numberCircle3">3</div>

<div id="step1">
  <p>Watch Ads <br> To Receive Tickets</p>
  </div>
  <div id="step2">
  <p>Spend Tickets <br> On Prizes</p>
  </div>
  <div id="step3">
  <p>WIN!</p>
  </div>
  </div>
  
<div id="side">
 <nav>
 <br>
 <br>
 <br>
 
 <table width="100%" height="100%">
 <tr><td class="tr2"><a href="http://localhost/Finesse%20Shop/welcome/"title="Home">Home</a></td></tr> 

<tr><td class="tr2"><a href="tickets"title="Get Tickets">Get Tickets</a></td></tr> 

 <tr><td class="tr2"><a href="prize1_winner"title="Gucci Belts">Gucci Belts</a></td></tr> 
 
<tr><td class="tr2"><a href="Gleam page.html"title="Premium Belts">Premium Belts</a></td></tr>
 </table>
</nav>
</div>






<div class="box6">
 <div class="box">
 <img src="gucci-hat.png" width="460" height="370" style="position:absolute; left:-100px; top:-20px;">
  <progress style="position:absolute; left:330px; top:245px;" class="progress-bar progress-bar-striped active"  
 value="<?php 

$u = "username";

$db = "prize3";
$v = "id";

$conn = db_connect();

$sql = "SELECT MAX($v) AS id FROM $db ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo $row['id'];
    }
} else {
    echo "0";
}
 ?>"  
max="100">
</progress>

<div id="progtext" style="position:absolute; left:335px; top:170px;color:white;
width:200px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Gucci-Hat<br>Value:$500</div>
  
  <!-- Button -->
  <div id="win">
<form action="http://localhost/Finesse%20Shop/welcome/win3" method="post">
<input type="number" name="entries" placeholder="0" value="0" id="ticketinput" 
min="0" max="<?php

$u = "username";

$db = "users_database";
$t = "tickets";

// Create connection
$conn = db_connect();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " );
} 

$sql = "SELECT $t FROM $db WHERE $u= '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["$t"];
    }
} else {
    echo "0";
}
	


?>"  
> 
<input class="btn" type="Submit" value="Enter Raffle" >
</form>
</div>
<div id="tickets">
<form action="tickets" target="_blank">
<input class="btn" type="Submit" value="Tickets!">
</form>
</div>


   
  
  </div>
</div>

 
 
 
 
<div class="footer" id="copyright">
<p><br>All rights reserved - Copyright © finesseshop.ca 2015 - Created by FS - <a href="about" title="About FinesseShop">About FinesseShop</a> - <a href="contact" title="Contact us">Contact us</a> <p>
</div>
 
 <div id="h1"><a href="http://localhost/Finesse%20Shop/welcome/" title="Home">
  <div class="title"><h1><span id="the">The </span><span id="f">
F</span>  <span id="title"> inesse Shop</span></h1></div>
</a></div>

<div id="logout">
<form action="http://localhost/Finesse%20Shop/Logout" method="get">
<input class="btn" type="Submit" value="Logout">
</form>
</div>

<div id="yourtickets">
<?php

$u = "username";

$db = "users_database";
$t = "tickets";

// Create connection
$conn = db_connect();
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ") ;
} 

$sql = "SELECT $t FROM $db WHERE $u= '$name' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Your Tickets: " .'<br/>' .$row["$t"];
    }
} else {
    echo "0";
}
	

$conn->close();
?>
</div>

<div id="name">
<?php
echo'Welcome!' .'<br />'  .$name ;
 ?>
</div>


</body>
</div>
</html>