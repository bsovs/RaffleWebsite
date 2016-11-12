<html>
<head>

<link rel="icon" type="image/png" href="http://localhost/Finesse%20Shop/welcome/icon-f.png"/>
<title>FinesseShop</title>

<?php
header("refresh:33;url=tickets_give" );
?>

<?php

session_start();

$name = $_SESSION['name'];


if (!(isset ($_SESSION['name']) != '')) {
exit(Header("Location:http://localhost/Finesse%20Shop/welcome_get"));
}
?>

<link rel="stylesheet" href="finessecss.css">
</head>
<body bgcolor="#F9F9F9" background="background3.jpg">

<div class="videobox">

<div class="video"><p>Video Player Unavailable At This Moment</p></div>
<script type="text/javascript" src="http://ap.lijit.com/www/delivery/fpi.js?z=321228&u=b_sovs&width=300&height=600"></script>

<div class="clockbox">
<span id="countdown" class="timer"></span>
<script>
var seconds = 30;
function secondPassed() {
    var minutes = Math.round((seconds - 30)/60);
    var remainingSeconds = seconds % 60;
    if (remainingSeconds < 10) {
        remainingSeconds = "0" + remainingSeconds;  
    }
    document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
    if (seconds == 0) {
        clearInterval(countdownTimer);
        document.getElementById('countdown')[0].innerHTML = "";
    } else {
        seconds--;
    }
}
 
var countdownTimer = setInterval('secondPassed()', 1000);

</script>
</div>
</div>



</body>
</html>

