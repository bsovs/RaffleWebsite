<?php


if (isset($_POST['g-recaptcha-response'])&&$_POST['g-recaptcha-response']){
	$secret = "6LfuwxMTAAAAAHYv48VX6Z4YPJQrrT_k0bfg-MNB";
	$ip = $_SERVER['REMOTE_ADDR'];
	$captcha = $_POST['g-recaptcha-response'];
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
    $arr = json_decode($rsp, TRUE);
	if($arr['success']){
		;
	}else{
		exit(Header("Location:http://localhost/Finesse%20Shop/welcome_get_up"));
	}
}
else{
	exit(Header("Location:http://localhost/Finesse%20Shop/welcome_get_up"));
}


session_start();

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
// Connect to the database
$connection = db_connect();


$name = $_POST['name'];
$pass = $_POST['password'];
$email = $_POST['email'];
$cpass = $_POST['cpassword'];

$db = "users_database";
$p = "password";
$u = "username";
$e = "email";
$id = "id";



if(strlen($pass) < 6) {
	exit(Header("Location:http://localhost/Finesse%20Shop/welcome_get_re-signup"));
}



//salt pass**
//
//

function createSalt()
{
    return 'lQ6KiYcDMQ85lQd3XED4Fsnskkuk777tkd7tdtk7dt7tdkuhMNWGC7Pp17M10l6l5u3nbDnDmjLrdzhdzhdrhrzd
	ddhdrzdhhzdrddddrzdhzdhddddyfkxyfkjty7udddddrdzhrhedzhddddddgsergegshreshzsdhyedhrdhdrzhdrhrdzhdrhd
	zdhrtzdhzdrhrzdhrfzdhrd^%^^#$ErdFht#%#$fghyveryugwyy7ygf5r5^ftOQ2bzUPIOYrbIGg6cDLoUmLljVw47ty8czNYG3f8iHc44LCJl';
}
$hash = hash('sha256', $pass);
$salt = createSalt();
$pass = hash('sha256', $salt . $hash);
//new salt
function createSalt2()
{
    return 'lQ6KiYcDMQ85lQd3XED4FsnshMNWGC7Pp17M10l6l5u3nbDnDmjrdzgdrzrsdgsdzhdhzdrhrdzhrdzh
	rdyrzt4iuluililhiliuhvrbIGg6#$#%#$$#@@$@$#@srrsgrsgsr44LCJl$2211%3//ee#grssrgrshrsdhrdshzrdhrdzhrdfh
	txdfhdthdzhtdzhtdhztdhtdhdzhtzdtzdhdzhddthdtzhdhtdhzdthtzdhttzxtzhzdhtdztdhzztdrsrgsrfghrsghrsghrse
	dhzdrhrzdhhLOQ2bzUPIOYrbIGg6cDLoUmLljVw47ty8czNYG3f8iHc44LCJl$2211%3//ee#grssrg';
}
$hash = hash('sha256', $pass);
$salt = createSalt2();
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
//new salt
function createSalt3()
{
    return 'lQ6KiYcDMQ85lQd3XED4FsnshMNWGC7Pp17M10l6l5u3nbDnDmjLOQ2bzUPIOrzfsdfrdszhbrdhzbrdzhredzhhrdzxhrzdrdhzrdrdzhrdhzdr
	fgjxftjgxfjntfxjxtfjftjtxfjft#$#$#$#$#@$@zrdhdrzhrdzhrdzhrdhrzghrdyrzt4iuluililhiliuhvrbIGg6#$#%#$$#@@$@$#@srrsgrsgsr44LCJl$2211%3//ee#grssrg
	txdfhdthdzhtdzhtdhztdhtdhdzhtzdtzdhdzhddthdtzhdhtdhzdthtzdhttzxtzhzdhtdztdhzztdrbIGg6#$#%#$$#@@$@$#@srrsgrsgsr44LCJl$2211%3//ee#grssrg';
}
$hash = hash('sha256', $pass);
$salt = createSalt3();
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
$pass = hash('sha256', $salt . $hash);
//
//repeat ... 20,000 times, lol//
for($i = 0; $i < 20000; $i++) $pass = hash('sha256', $salt . $hash); //
//end of salt**
//
//

$sql = "INSERT INTO $db ($id, $u, $e, $p)
VALUES ('', '$name', '$email', '$pass')";

if (mysqli_query($connection, $sql)) {
	$_SESSION['name'] = $name;
	
	exit(Header("Location:http://localhost/Finesse%20Shop/welcome/"));
} 

else {
    exit(Header("Location:welcome_get_re-signup"));
}



mysqli_close($connection);
?>