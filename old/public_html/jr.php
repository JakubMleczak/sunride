<?php

$title = 'Sunride Jr' ;

?>

<head>
<link rel="icon" type="image/gif" href="demo/img/logotitle.png"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="">
<meta name="author" content="">


<?php

include('phpCore/template.php') ;

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
		<section id="home" class="site-splash fullscreen" style="height:20%;min-height: 200px">

			<div class="splash-slider active cycle-paused">

			<div class="splash-content cycle-slide" style="position: absolute; top: 0px; left: 0px; display: block; opacity: 1; z-index: 99; visibility: hidden;" > <!-- change the url("") for different background using the full directory -->
            
					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="splash-text">
								    
									<h1 class="splash-headline">UK
									<span class="text-primary"> SEDS</span> 2020 </h1>


								</div>

							</div>

						</div>

					</div>

				</div><div class="splash-content cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 98; visibility: visible; display: block; opacity: 1;"> <!-- change the url("") for different background using the full directory -->

					<div class="container">

						<div class="row">

							<div class="col-md-12">
                                
                                <div class="splash-text">
								    
									<h1 class="splash-headline">
										SunrIde Jr
									</h1>
                                    
                                    
								</div>
                                
                                <div class="splash-image">
                                    
                                    
                                </div>
                                
							</div>

						</div>

					</div>

				</div> </div>
			<div class="splash-media splash-media-img has-bg" style="background-position: 50% 0px;"> 
				<div class="overlay"></div>
			</div>

		</section>

<?php

include('phpCore/nav.php') ;

?>

<style>
    
    .site-header {
    
    height:350px;
    
}

</style>
    <div class="site-wrapper">
    
    		<div class="site-body">
               <?php
                $content = 'Teams are challenged with designing and submitting a brief technical report of a mid-power rocket with the primary goal of reaching the greatest apogee possible. Motor selection is limited to ensure a fair competition between teams.';
                $pic ='demo/TEST/UKSEDS.png';
               include('rockets/mission.php');
               ?>

                <?php
               $name ='Sunride Jr';
                $content = 'SunrIde Jr.  is an amateur mid-power rocket with a solid 2 grain motor. It is expected to reach an altitude of 1350 m. For the payload, it carries a camera and a microphone from the Arduino Nano 33BLE to measure the speed of the rocket with the Doppler Effect. We are competing in the UKSEDS National Rocketry Competition in July 2020 with a design report of SunrIde Jr. as the competition went online due to COVID19.';
                $pic ='demo/TEST/jrrocket.png';
               include('rockets/rocket.php');
               ?>
               
                <?php
	
            	include('phpCore/footer.php')
            	
            	?>
            
            </div>
        
    </div>



</div>


<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="assets/js/hydrogen.packed.min.js"></script>

<script type="text/javascript" src="assets/plugins/royalslider/jquery.royalslider.min.js"></script>
<script type="text/javascript" src="assets/plugins/mfp/jquery.mfp-0.9.9.js"></script>
<script type="text/javascript" src="assets/plugins/mediaelement/mediaelement-and-player.min.js"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap3.min.js"></script>
<script type="text/javascript" src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/plugins/isotope/jquery.isotope.min.js"></script>
<script type="text/javascript" src="assets/plugins/form/jquery.form.min.js"></script>
<script type="text/javascript" src="assets/plugins/form/jquery.validate.min.js"></script>

</body>

</html>