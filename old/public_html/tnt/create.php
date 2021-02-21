
<form method="post" enctype="multipart/form-data">
  Please type your name:
  <input type="text" name="name" placeholder="please enter name"><br><br>
  <input type="submit" value="Submit Your Track and Trace Application" name="submit">
</form>

<?php
if (isset($_POST["submit"])) {
    
    if ($_POST["name"] == "") {
        
        echo "Please enter your Name";
        
    }else{
    
$person = $_POST["name"] ;
$value = 0;
echo "Please do not enter your details again your details are already being processed";
a:
$value = $value + 1;
$name = "person" . $value . ".php";
$name1 = "person" . $value;
if (file_exists($name)) {
    goto a;
}
else {
    $myfile = fopen($name , "w");
    fclose($name);
    $txt = '
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
    $person = "' . $person . '";
    
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
        ';
    file_put_contents($name, $txt, FILE_APPEND | LOCK_EX);
    $txt = '$sql = ';
    file_put_contents($name, $txt, FILE_APPEND | LOCK_EX);
    $txt = '"INSERT ' ;
    file_put_contents($name, $txt, FILE_APPEND | LOCK_EX);
    $txt = 'INTO `$where`(`person`, `you`, `contact`, `date`) VALUES (\'$person\' ,\'$name\' , \'$contact\'';
    file_put_contents($name, $txt, FILE_APPEND | LOCK_EX);
    $txt = ', NOW())";
    ' ;
    file_put_contents($name, $txt, FILE_APPEND | LOCK_EX);
    $txt = 'mysqli_query($conn, $sql);
    
    header( "Location: https://sunride.group.shef.ac.uk/" );
    exit ;
    }
    
}
}


?>;';
    file_put_contents($name, $txt, FILE_APPEND | LOCK_EX);
    
}
    include('QR/phpqrcode/qrlib.php');
    include('QR/phpqrcode/config.php');

    // how to save PNG codes to server
    
    
    // we need to generate filename somehow, 
    // with md5 or with database ID used to obtains $codeContents...
    $fileName = 'QR' . $name1  .'.png';
    
    $pngAbsoluteFilePath = $tempDir.$fileName;
    $urlRelativeFilePath = "https://sunride.group.shef.ac.uk/tnt/".$name;
    
    // generating
    if (!file_exists($fileName)) {
        QRcode::png($urlRelativeFilePath, $fileName);
        echo "Please Save the image shown below and leave this page once done, you have now been registered";
        echo "<br><br><img src=\"$fileName\">";
        
    } else {
        
    }
   

    //header( "Location: https://sunride.group.shef.ac.uk/" );
    exit ;
}
}
?>