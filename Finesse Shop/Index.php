<!DOCTYPE html>

<html>
<head>


<title>FinesseShop</title>
<link rel="stylesheet" href="finessecss.css">
<link rel="icon" type="image/png" href="icon-f.png"/>
<script src="jquery-1.11.3.min.js"></script>



<?php

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
        $config = parse_ini_file('config.ini'); 
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

<div class="box6">
 <div class="box">
<div id="slideshow" style=" position:relative;
							margin:auto;
							width: 100px; 
							height: 100px; 
														">
  

  <div>
     
	 <img src="gucci-belt" width="460" height="370" style="position:absolute; left:-340px; top:-260px;">
   <progress style="position:absolute;  left:120px; top:-10px;" class="progress-bar progress-bar-striped active"  
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

<div id="progtext" style="position:absolute; left:122px; top:-70px; color:white;
width:400px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Leather Brown double G buckle<br>Value:$500</div>
 
<a href="tickets" ></a>
 
  </div>
  
   <div>
   <img src="gucci-belt2" width="460" height="370" style="position:absolute; left:-340px; top:-260px;">
  
    <progress style="position:absolute;  left:120px; top:-10px;" class="progress-bar progress-bar-striped active"  
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

<div id="progtext" style="position:absolute; left:122px; top:-72px; color:white;
width:400px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Leather GG belt<br>Value:$450</div>
 

</div>
<div>
 <img src="gucci-hat" width="460" height="370" style="position:absolute; left:-340px; top:-260px;">
  
    <progress style="position:absolute; left:120px; top:-10px;" class="progress-bar progress-bar-striped active"  
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

<div id="progtext" style="position:absolute; left:122px; top:-72px; color:white;
width:400px;
height:100px;
font-size:130%;
text-shadow:5px 3px 3px black;">Felt Hat | Snake and Bee<br>Value:$675</div>
 

</div>
<div>
 <img src="Jordan_gammablue2.png" width="460" height="370" style="position:absolute; left:-340px; top:-260px;">
  
    <progress style="position:absolute; left:120px; top:-10px;" class="progress-bar progress-bar-striped active"  
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

<div id="progtext" style="position:absolute; left:122px; top:-72px; color:white;
width:400px;
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
<a href="Gleam page.html"><img src="premium-gucci-belt2.jpg" width="300px"  height="300px"id="Premium giveaway"></a>
</div>
<div id="Gleam2text">
<a href="Gleam page.html">Premium Gucci<br>Belt Giveaway</a>
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
<div class="box4">
<div id="products" style="height:723px;width:50%;  border:5px solid black;font:16px/26px Georgia, Garamond, Serif;">
<div id="table">
<table width="100%" height="100%" > 
<tr>
<th class="table">Product</th>
<th class="table">Value</th>
</tr>
<!-- row 1-->
<tr class="table">
<td class="table">
<a href="welcome_get">
<img src="gucci-belt.png" width="90px" height="60px">
<font color="black">Leather Black Gucci</font></td></a>
<td class="table2">$500</td>
</tr>
<!-- row 2-->
<tr class="table">
<td class="table">
<a href="welcome_get">
<img src="gucci-belt2.png" width="90px" height="60px">
<font color="black">Leather Brown Gucci</font></td></a>
<td class="table2">$450</td>
</tr>
<!-- row 3-->
<tr class="table">
<td class="table">
<a href="welcome_get">
<img src="gucci-hat.png" width="90px" height="60px">
<font color="black">Gray Gucci Hat</font></td></a>
<td class="table2">$550</td>
</tr>
<!-- row 4-->
<tr class="table">
<td class="table">
<a href="welcome_get">
<img src="jordan_gammablue.png" width="90px" height="60px">
<font color="black">Air Jordan 11 Retro "gamma blue"</font></td></a>
<td class="table2">$500</td>
</tr>
<!-- row 5-->
<tr class="table">
<td class="table">
<img src="yezzy.png" width="80px" height="45px" style="padding-top:7.5px;padding-bottom:7.5px;">
Addidas Yeezy Boost 350
<img src="Locked.png" title="unlocks on 21/01/2016" width="100%" height="73px" style="position:absolute;left:0px;top:332px;"></td>
<td class="table2">$1,100</td>
</tr>
<!-- row 6-->
<tr class="table">
<td class="table">
<img src="ovo10" width="80px" height="60px" >
Air Jordan Rerto 10 OVO
<img src="Locked.png" title="unlocks on 21/01/2016" width="100%" height="73px" style="position:absolute;left:0px;top:408px;"></td>
<td class="table2">$800</td>
</tr>
</table>
</div>
</div>
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
 <tr><td class="tr2"><a href="Index"title="Home">Home</a></td></tr> 

<tr><td class="tr2"><a href="welcome_get"title="Get Tickets">Get Tickets</a></td></tr> 

 <tr><td class="tr2"><a href="welcome_get"title="Gucci Belts">Gucci Belts</a></td></tr> 
 
<tr><td class="tr2"><a href="Gleam page.html"title="Premium Belts">Premium Belts</a></td></tr>
 </table>
</nav>
</div>




<div class="box6">
 <div class="box">
 

  <div id="participate" >
  <form action="welcome_get" method="get">
<input class="btn" type="Submit" value="Login to Participate">
</form>
</div> 
</div>
</div>
 
 
 <div class="footer" id="copyright">
<p><br>All rights reserved - Copyright © finesseshop.ca 2015 - Created by @Brandon.Sovran - <a href="rules" title="Contest Rules">Contest Rules</a> - <a href="about" title="About FinesseShop">About FinesseShop</a> - <a href="contact" title="Contact us">Contact us</a> <p>
</div>
 
 <div id="h1">
   <a href="http://localhost/Finesse%20Shop/" title="Home"><div class="title"><h1><span id="the">The </span><span id="f">
F</span>  <span id="title"> inesse Shop</span></h1></div></a>
</div>
<div id="login">
<form action="welcome_get" method="get">
<input class="btn" type="Submit" value="Login/SignUp">
</form>
</div>


</body>
</div>
</html>
