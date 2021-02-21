<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'cpanel-live1');
define('DB_USERNAME', 'co6sun_co6sun');
define('DB_PASSWORD', 'Po0x6qJl=vb*');
define('DB_NAME', 'co6sun_Admins');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>