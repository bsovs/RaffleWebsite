<html>
<head>

<title>FinesseShop</title>
<link rel="stylesheet" href="logincss.css">
<link rel="icon" type="image/png" href="http://localhost/Finesse%20Shop/welcome/icon-f.png"/>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script>
function checkPass()
{
   
    var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('cpassword');
    
    var message = document.getElementById('confirmMessage');

    var goodColor = "#66cc66";
    var badColor = "#ff6666";
  
    if(pass1.value == pass2.value){
      
        pass2.style.borderColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"
    }else{
        
        pass2.style.borderColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match!"
    }
}  

function checkpass() {
	var pass1 = document.getElementById('password');
    var pass2 = document.getElementById('cpassword');
	var submit = document.getElementById('submit');
	
	if (pass1.value == pass2.value){
		return true;
	}
	else {
		 return false;
	}
		
}
	
</script>
</head>
<body>


<div class="box3">
<div id="main">
<div id="signup">
<form action="connect" method="post">

<h2><span id="L">S</span><span id="title"> ign Up </span></h2>
<br><br>
<div id="error">
 *Username and/or E-mail already exists 
</div>
<br>
Name: <input type="text" required="required" id="name" placeholder="Name" name="name">
<br>
E-mail: <input type="text" id="email" required="required" placeholder="E-mail" name="email">
<br>
Password: <input type="password" required="required" id="password" placeholder="******" name="password" minlength="6">
<br>
Confirm Password:  <span id="confirmMessage" class="confirmMessage"></span><input type="password" required="required" id="cpassword" placeholder="******" name="cpassword" minlength="6" onkeyup="checkPass(); return false;"><br>
<br>
<div class="g-recaptcha" data-sitekey="6LfuwxMTAAAAAN20lav4IwRGDkWu9Jl24TjfbPHB"></div>
<br>
<input type="submit" name="submit" id="submit" onclick=" return checkpass();">

</div>
</div>
</form>
</div>

<div class="links2">
<a href="welcome_get" title="Login"><font color="black">Login</font></a> | <a href="http://localhost/Finesse%20Shop/" title="Home"><font color="black">Home</font></a>
</div>

</body>
</html>