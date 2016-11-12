<?php


function createSalt()
{
    return 'lQ6KiYcDMQ85lQd3XED4FsnshMNWGC7Pp17M10l6l5u3nbDnDmjLOQ2bzUPIOYrbIGg6cDLoUmLljVw47ty8czNYG3f8iHc44LCJl$2211%3//ee#grssrg';
}


//salt
$hash = hash('sha256', $pass);
$salt = createSalt();
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

exit(Header("Location:404"));

?>
