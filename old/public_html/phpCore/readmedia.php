<?php

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
        $cnt = 1;
        $sql = "SELECT * FROM `$table` " ;
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
        
            $location = $row["$x"];
            $pic = $row["$y"];
            $name = $row["$z"];
            
            
            
            
            
              
            if ($id == "0") {
                include('phpCore/namepdf.php');
            }  
            elseif ($id == "1") {
                include('phpCore/litpdf.php');
            } 
            elseif ($id == "2") {
                include('phpCore/litmodel.php');
            }
 
            elseif ($id == "3") {
                include('phpCore/litgallery.php');
            }
            
            ++$cnt;
            
          }
        } else {
          echo "0 results";
        }
        
        
        mysqli_close($conn);

?>