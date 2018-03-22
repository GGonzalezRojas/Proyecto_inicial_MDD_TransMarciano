<?php

$user = 'root';
$password = 'root';
$db = 'transmarciano';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

/* Testing conexion

if ($success) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
*/

?>