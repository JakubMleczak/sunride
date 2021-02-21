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
        
        $sql = "SELECT * FROM `$table` " ;
        $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
        
            $title = $row["title"];
            $info = $row["info"];
            $img = $row["img"];
            $setting = $row["setting"];
            
            
            if ($setting == "left" ){
            
            include("leftcontent.php");
            
            } elseif ( $setting == "right") {
             
             include("rightcontent.php");
                
            } elseif ( $setting == "centre") {
             
             include("centrecontent.php");
                
            } else {
                
                echo "error retrieving section setting please check database";
                
            }

            
          }
        } else {
          echo "0 results";
        }
        
        
        mysqli_close($conn);

?>