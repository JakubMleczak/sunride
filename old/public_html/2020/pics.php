<?php
echo $extra
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <hgroup>
          	    <h4 class="text-primary text-uppercase"><?php echo $team ?></h4>
  				<h3 class="text-highlight text-uppercase half-margin-bottom"><?php echo $rocket ?></h3>
  			</hgroup>
        </div>
    
    <div id="team" class="section-row no-padding-top">

    <div class="container">
    <div class="row">
<?php
$servername = "cpanel-live1";
$username = "co6sun_co6sun";
$password = "Po0x6qJl=vb*";
$dbname = "co6sun_team";


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

    $Pic = $row["Pic"];
    $Name = $row["Name"];
    $Role = $row["Role"];
    include('prof.php');
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>
</div>
</div>
    </div>
    </div>
</div>




<?php
echo $space
?>