
<form method="post" enctype="multipart/form-data">
  Please type a Title:
  <input type="text" name="title" placeholder="Title"><br><br>
  Please type Content:
  <input type="text" name="comment" placeholder="Content"><br><br>
  Position:
  <select name="pos">
  <option>please select a position setting</option>
      <option value="left">Left</option>
      <option value="right">Right</option>
      <option value="centre">centered (no image will be shown)</option>
  </select><br><br>
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
  <input type="submit" value="Upload Content" name="submit">
</form>
<p>Conditions of image upload are:<br>Must be of type JPG,JPEG or png<br>No larger than 500KB<br> and must not already exist in the system under the same.</p><br><br><br>


<?php

$actualdir = "shu/pics/" ; // needs to be placed in web php just here for demo
$where = "hallam"; // needs to be placed in web php just here for demo

if ($_POST["pos"] == "centre") {
    $file = "";
    
    goto comment;   
}    

$target_dir = "../../" . $actualdir;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }

// Check if file already exists
if (file_exists($target_file)) {
  echo "<br> file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "<br> your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg") {
  echo "<br> only JPG, JPEG & PNG files are allowed.";
  $uploadOk = 0;
}


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    
    $file = $actualdir . basename( $_FILES["fileToUpload"]["name"]) ;
    
    comment:
        
    $message = $_POST["comment"] ;
    $position = $_POST["pos"] ;
    $title = $_POST["title"] ;
    
    $dbname = "co6sun_content";
    $servername = "cpanel-live1";
    $username = "co6sun_co6sun";
    $password = "Po0x6qJl=vb*";
    
    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
    
    $sql = "INSERT INTO `$where`(`title`, `info`, `img`, `setting`) VALUES ('$title' , '$message', '$file', '$position')" ;
    mysqli_query($conn, $sql);

  } else {
    echo "<br>Sorry, there was an error uploading your file.";
  }
}

}
?>