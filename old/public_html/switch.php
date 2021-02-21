<?php
$servername = "cpanel-live1";
$username = "co6sun_co6sun";
$password = "Po0x6qJl=vb*";
$dbname = "co6sun_SAC2019";
$table = "SAC2019";
$find = "Pics/2020/personal photos/";
$replace = "Pics/2020/personal photos/Vishan.jpg" ;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM `$table`" ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) != 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    
    $Number = $row["Number"];
    $Pic = $row["Pic"];
    $Name = $row["Name"];
    $Role = $row["Role"];
    
    $NewPic = str_replace( "$find", "$replace" , $Pic);
    $sql1 = "UPDATE `$table` SET `Number`= '$Number',`Pic`= '$NewPic',`Name`= '$Name',`Role`= '$Role' WHERE `Number`= '$Number' " ;
    mysqli_query($conn, $sql1);
    echo $NewPic;
    echo "<br>";
  }
} else {
  //"0 results";
}

mysqli_close($conn);
?>

