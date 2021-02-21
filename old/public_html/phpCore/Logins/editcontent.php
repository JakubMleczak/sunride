<form method="post" enctype="multipart/form-data">
  Please pick section to edit by Title:
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
  To make Edit:
  <input type="submit" value="Select by Title" name="submit1">
</form>

<form method="post" enctype="multipart/form-data">
  Please pick section to edit by Title:
  <select name="titl1">
  <option>Selection</option>
      <?php
      if(isset($_POST["submit1"])) {
        $table = "hallam"; // put this on page not here just here for demo
        
        $servername = "cpanel-live1";
        $username = "co6sun_co6sun";
        $password = "Po0x6qJl=vb*";
        $dbname = "co6sun_content";
        
        $title = $_POST['titl'] ;
        echo $title;        // remove checker
        
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM $table WHERE `title` = '$title'" ;
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
        
            
            $data = "title";
            include('option.php');
            
            $data = "info";
            include('option.php');
            
            $data = "img";
            include('option.php');
            
            $data = "setting";
            include('option.php');
          }
        } else {
          echo "0 results";
        }
        
        mysqli_close($conn);
      }
    ?>
  </select><br><br>
  To chose section:
  <input type="submit" value="Pick by Section" name="submit2">
</form>
<form method="post" enctype="multipart/form-data">
  You may now edit:
<?php
      if(isset($_POST["submit2"])) {
        $table = "hallam"; // put this on page not here just here for demo
        
        $servername = "cpanel-live1";
        $username = "co6sun_co6sun";
        $password = "Po0x6qJl=vb*";
        $dbname = "co6sun_content";
        
        $data = $_POST["titl1"];
        echo $data;
        
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        
        
        
        
        
        $sql1 = "SELECT * FROM $table WHERE `title` = '$title'" ;
        $result = mysqli_query($conn, $sql1);
        
        $row = mysqli_fetch_assoc($result);
          
          
          
          $data1 = $row["$data"] ;
          include('input.php');
        
        
        
        mysqli_close($conn);
      }
    ?>
<input type="submit" value="Pick by Section" name="submit">
</form>

<?php

$where = "hallam"; // needs to be placed in web php just here for demo



// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  
  
    
    
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
    
    $sql = "UPDATE `$where` SET `title`= '$title1',`info`= '$info1',`img`= '$img1',`setting`= '$setting1' WHERE 1" ;
    mysqli_query($conn, $sql);
    $file = "../../" . $img ;
    unlink($file);

  


}
?>