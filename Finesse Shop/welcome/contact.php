

<!DOCTYPE html>

<html>
<head>
<!--Welcome-->
<script src="jquery-1.11.3.min.js"></script>

<script>
function GetIEVersion() {
  var sAgent = window.navigator.userAgent;
  var Idx = sAgent.indexOf("MSIE");
  // If IE, return version number.
  if (Idx > 0)
    return parseInt(sAgent.substring(Idx+ 5, sAgent.indexOf(".", Idx)));

  // If IE 11 then look for Updated user agent string.
  else if (!!navigator.userAgent.match(/Trident\/7\./))
    return 11;

  else
    return 0; //It is not IE

}
if ((GetIEVersion() > 0) || (navigator.userAgent.toLowerCase().indexOf('MSIE) > -1)){
  window.location = "http://localhost/Finesse%20/chrome";
}else {
  ;
}
</script>

<title>FinesseShop</title>
<link rel="stylesheet" type="text/css" href="finessecss.css">
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



<body bgcolor="#F9F9F9" background="background4.jpg">

<div class="box6">
 <div class="box">
<div id="slideshow" style=" position:relative;
							margin:auto;
							left:-20%; top:0px;
							width: 100px; 
							height: 100px; 
														">
  

  <div>
     
	 <img src="gucci-belt" width="460" height="370" style="position:absolute; left:-200px; top:-20px;">
   <progress style="position:absolute;  left:230px; top:245px;" class="progress-bar progress-bar-striped active"  
 value="<?php 

$u = "username";

$db = "prize1";
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

<div id="progtext" style="position:absolute; left:235px; top:170px; color:white;
width:200px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Leather black GG belt<br>Value:$450</div>
 

 
  </div>
  
   <div>
   <img src="gucci-belt2" width="460" height="370" style="position:absolute; left:-200px; top:-20px;">
  
    <progress style="position:absolute;  left:230px; top:245px;" class="progress-bar progress-bar-striped active"  
 value="<?php 

$u = "username";

$db = "prize2";
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

<div id="progtext" style="position:absolute; left:235px; top:170px; color:white;
width:200px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Gucci-Belt<br>Value:$450</div>
 

</div>
<div>
 <img src="gucci-hat.png" width="460" height="370" style="position:absolute; left:-200px; top:-20px;">
  
    <progress style="position:absolute; left:230px; top:245px;" class="progress-bar progress-bar-striped active"  
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

<div id="progtext" style="position:absolute; left:235px; top:170px; color:white;
width:200px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Gucci-Hat<br>Value:$470</div>
 

</div>
<div>
 <img src="Jordan_gammablue2.png" width="460" height="370" style="position:absolute; left:-230px; top:-15px;">
  
    <progress style="position:absolute; left:230px; top:245px;" class="progress-bar progress-bar-striped active"  
 value="<?php 

$u = "username";

$db = "prize4";
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

<div id="progtext" style="position:absolute; left:235px; top:170px; color:white;
width:200px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Air Jordan retro 11 Gamma Blue<br>Value:$550</div>

</div>
</div>
<script>
 $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(900)
    .next()
    .fadeIn(1100)
    .end()
    .appendTo('#slideshow');
},  4000);

$(".enterclick").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});
</script>
 
 </div>
 </div>
  
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
<div id="news" style="height:40%;width:300px; border:5px solid black;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">


<h1>NEWS</h1>
*Tickets can no longer be awarded due to lack of video ads.
<br>
-Multi browser support limited, please use GoogleChrome.
<br> 
-Security features updated, no more bugs in login.
<br>
-Finesse Shop is now open! Woohhooo!
<br>
-Prizes now available for entry! 
<br>
-New prizes: Gucci belt brown, Gucci belt black, Gucci hat gray, Jordan 11 gamma blues.
<br>
-Tickets to be awarded in values of 10. Awarded after watching 30s ad.
</div>


<div id="contactus">
<h1>Contact Us</h1>
<p>General: FS@FinesseShop.ca</p>
<p>Help/Support: support@FinesseShop.ca</p>
<p>Feedback: feedback@FinesseShop.ca</p>
<br>
<p>Staff: brandon.sovran@FinesseShop.ca</p>
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
 <br>
 <table width="100%" height="100%">
 <tr><td class="tr2""><a href="http://localhost/Finesse%20Shop/welcome/"title="Home">Home</a></td></tr> 

<tr><td class="tr2"><a href="tickets" target="_blank" title="Get Tickets">Get Tickets</a></td></tr> 

 <tr><td class="tr2"><a href="Leather-belt-with-doubleGbuckle"title="Gucci Belts">Black Gucci-Belt</a></td></tr> 
  <tr><td class="tr2"><a href="Leather-GG-belt"title="Gucci Belts">Brown Gucci-Belt</a></td></tr>
<tr><td class="tr2"><a href="Gleam page"title="Premium Belts">Premium Gucci Giveaway</a></td></tr>
 </table>
</nav>
</div>






<div class="box6">
 <div class="box">

  

<div id="slidelink" style=" position:relative;
							margin:auto;
							left:-20%; top:0px;
							width: 100px; 
							height: 100px; 
														">
 
 <div style="position:absolute;left:-140px;width:350px;height:350px;"><a href="Leather-belt-with-doubleGbuckle"width="300px"height="400px">
 <p style="width:350px;height:380px;"></p>
 <button href="Leather-belt-with-doubleGbuckle" class="btn" style="position:absolute;left:370px;top:280px;width:120px;">Enter Raffle</button>
 </a><a href="tickets" target="_blank" width="0px"height="0px"> 
 <button href="tickets" class="btn" style="position:absolute;left:505px;top:280px;">Tickets!</button></a></div>
 
 <div style="position:absolute;left:-140px;width:350px;height:350px;"><a href="Leather-GG-belt"width="300px"height="400px">
 <p style="width:350px;height:380px;"></p>
 <button href="Leather-GG-belt" class="btn" style="position:absolute;left:370px;top:280px;width:120px;">Enter Raffle</button>
 </a><a href="tickets" target="_blank" width="0px"height="0px"> 
 <button href="tickets" class="btn" style="position:absolute;left:505px;top:280px;">Tickets!</button></a></div>
 
 <div style="position:absolute;left:-140px;width:350px;height:350px;"><a href="snake-and-bee"  width="300px"height="400px">
 <p style="width:350px;height:380px;"></p>
 <button href="tickets" class="btn" style="position:absolute;left:370px;top:280px;width:120px;">Enter Raffle</button>
 </a><a href="tickets" target="_blank" width="300px"height="400px">
 <button href="tickets" class="btn" style="position:absolute;left:505px;top:280px;">Tickets!</button></a></div>
 
  <div style="position:absolute;left:-140px;width:350px;height:350px;"><a href="gamma-blue" width="300px"height="400px">
 <p style="width:350px;height:380px;"></p>
 <button href="tickets" class="btn" style="position:absolute;left:370px;top:280px;width:120px;">Enter Raffle</button>
 </a><a href="tickets" target="_blank" width="300px"height="400px">
 <button href="tickets" class="btn" style="position:absolute;left:505px;top:280px;">Tickets!</button></a></div>
 
 </div>
 <script>
 $("#slidelink > div:gt(0)").hide();

setInterval(function() { 
  $('#slidelink > div:first')
    .fadeOut(00)
    .next()
    .fadeIn(00)
    .end()
    .appendTo('#slidelink');
},  4000);

$(".enterclick").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});
</script>
 </div>
</div>
 
 
 <div class="footer" id="copyright">
<p><br>All rights reserved - Copyright © finesseshop.ca 2015 - Created by @Brandon.Sovran - <a href="rules" title="Contest Rules">Contest Rules</a> - <a href="about" title="About FinesseShop">About FinesseShop</a> - <a href="contact" title="Contact us">Contact us</a> <p>
</div>
 
 <div class="head">
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

// Load configuration as an array. Use the actual location of your configuration file
$config = parse_ini_file('../config.ini'); 

// Create connection
$connection = mysqli_connect('localhost',$config['username'],$config['password'],$config['dbname']);

// Check connection
if($connection === false) {
    // Handle error - notify administrator, log to a file, show an error screen, etc.
	exit(Header("Location:welcome_get"));	
}


// Connect to the database
$connection = db_connect();



$sql = "SELECT $t FROM $db WHERE $u= '$name' ";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Your Tickets: " .'<br/>' .$row["$t"];
    }
} else {
   echo "Your Tickets: " .'<br/>' ."0";
}
	

?>
</div>

<div id="name">
<?php
echo'Welcome!' .'<br />'  .$name ;
 ?>
</div>
</div>

</body>

</html>

