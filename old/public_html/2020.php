

<?php

$title = 'SunrIde Team 2020';

?>



<head>
<link rel="icon" type="image/gif" href="demo/img/logotitle.png"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="author" content="">

<?php

include('phpCore/template.php');

?>

<style>

.uos {
  position: absolute;
  bottom: 60%;
  right: 103%;
  width: 20%;
  height: auto;
}

.shu {
  position: absolute;
  bottom: 60%;
  right: -20%;
  width: 13%;
  height: auto;
}




</style>

</head>

<body>

<div class="site-loader"></div>
<?php

include('phpCore/nav.php');

?>

<style>
    
    .site-header {
    
    height:350px;
    
}

</style>
<div id="team" class="section-row no-padding-top">

  <div class="container">

    <div class="row">

      <div class="col-md-8 col-md-push-4">

        <h1 class="section-separator-title">
          <br>
          <span data-shadow-text="Meet Our Team">Meet Our Team</span>
        </h1>

      </div>

    </div>

    <div class="row">

      <div class="col-md-8 col-md-push-4">
        <p class="lead">
The SunrIde III team is consisted of 15 dedicated and hardworking students from the Faculty of Engineering and the School of Mathematics and Statistics. The aim of the team is to educate and prepare engineering students to successfully enter the space industry upon graduation, having acquired technical confidence and set the theoretical foundations that will differentiate them from other candidates. The first objective for this year is to once again compete in Spaceport America Cup, this time advancing to the 30,000 feet milestone. The second objective is to take part in the SDL Payload Challenge. The scientific data acquired from our experimental payload mission will be utilized to advance research within the University of Sheffield and the SunrIde community.</p>
      </div>

    <?php 
    $table = 'ss2s';
     $team = 'SunrIde Team - SS2S';
     $rocket = 'Sheffield Shot To Space - Karman Alpha';
     
     include('2020/pics.php');
     
     ?>
      

  <?php 
  
     $table = 'SAC2020';
     $team = 'SunrIde Team - SAC';
     $rocket = 'Spaceport Americ Cup - Vesna';
     
     include('2020/pics.php');
     
     ?>
     

  <?php 
  
  $space="<br><br><br><br><br><br><br>
  <br><br><br><br><br><br><br>";
  $table = 'UKSEDS';
     $team = 'SunrIde Team - UKSEDS';
     $rocket = 'UKSEDS - SunrIde Jr';
     
     include('2020/pics.php');
     
     ?>


    </div>

  </div>



<?php
	
	include('phpCore/footer.php');
	
	?>	


</div>

<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="assets/js/hydrogen.packed.min.js"></script>

<script type="text/javascript" src="assets/plugins/royalslider/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="assets/plugins/mfp/jquery.mfp-0.9.9.min.js"></script>
<script type="text/javascript" src="assets/plugins/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap3.min.js"></script>
<script type="text/javascript" src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/plugins/isotope/jquery.isotope.min.js"></script>

</body>



