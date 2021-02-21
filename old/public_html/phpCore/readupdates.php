<?php

        $servername = "cpanel-live1";
        $username = "co6sun_co6sun";
        $password = "Po0x6qJl=vb*";
        $dbname = "co6sun_news";
        
        
        
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
        
            $img = $row["img"];
            $info = $row["info"];
            $date = $row["date"];
            
            
            
            if ($img == "" ){
            
            include('update1.php');
            
            } else {
                
            include('update2.php');
                
            }

            
          }
        } else {
          echo "0 results";
        }
        
        
        mysqli_close($conn);

?>