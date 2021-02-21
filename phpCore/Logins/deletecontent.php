<form method="post" enctype="multipart/form-data">
  Please pick section to delete by Title:
  <select name="titl">
  <option>Selection</option>
      <?php
      
        $table = "hallam"; // put this on page not here just here for demo
        
        $servername = "cpanel-live1";
        $username = "co6sun_co6sun";
        $password = "Po0x6qJl=vb*";
        $dbname = "co6sun_content";
        
        
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM $table " ;
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
        
            $title = $row["title"];
            $info = $row["info"];
            $img = $row["img"];
            $setting = $row["setting"];
            $data = $title;
            include('option.php');
          }
        } else {
          echo "0 results";
        }
        
        mysqli_close($conn);
    ?>
  </select><br><br>
  To delete press:
  <input type="submit" value="Delete Selection" name="submit">
</form>



<?php

$where = "hallam"; // needs to be placed in web php just here for demo



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  
  
    $title1 = $_POST["titl"] ;
    
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
    
    $sql = "DELETE FROM `$where` WHERE `title` = '$title1'" ;
    mysqli_query($conn, $sql);
    $file = "../../" . $img ;
    unlink($file);

  


}
?>