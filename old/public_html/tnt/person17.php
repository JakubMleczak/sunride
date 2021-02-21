<form method="post" enctype="multipart/form-data">
  Please type your name:
  <input type="text" name="name" placeholder="please enter name"><br><br>
  Please type your Phone Number:
  <input type="text" name="phone" placeholder="please enter phone number"><br><br>
  <input type="submit" value="Submit Covid Form" name="submit">
</form>

<?php

$where = "tnt";  // needs to be placed in web php just here for demo
$name = "" ;
$contact = "" ;
$person = "";
if (isset($_POST["submit"])) {
    
    if ($_POST["name"] == "" or $_POST["phone"] == "") {
        
        echo "Please enter full details";
        
    }else{
    
    $name = $_POST["name"] ;
    $contact = $_POST["phone"] ;
    $person = "Ahmed Aly";
    
    comment:
    
    $dbname = "co6sun_tnt";
    $servername = "cpanel-live1";
    $username = "co6sun_co6sun";
    $password = "Po0x6qJl=vb*";
    
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO `$where`(`person`, `you`, `contact`, `date`) VALUES ('$person' ,'$name' , '$contact', NOW())" ;
    mysqli_query($conn, $sql);
    
    header( "Location: https://sunride.group.shef.ac.uk/" );
    exit ;
    }
    
}
}


?>