<?php

//oficial server
$servername = "cpanel-live1";
$password = "Po0x6qJl=vb*";
$username = "co6sun_co6sun";
$namee = "co6sun_sunride";

//local settings
// $servername = "localhost";
// $password = "";
// $username = "root";
// $namee = "co6sun_sunride";


$conn = mysqli_connect($servername, $username, $password, $namee);
mysqli_set_charset($conn, 'utf8');

echo mysqli_error($conn);
if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());
   echo "error";
}
?>