<?php

$title = 'Helen' ;

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
								    
									<h1 class="splash-headline">SPACEPORT
									<span class="text-primary"> America</span> 2019 </h1>


								</div>

							</div>

						</div>

					</div>
                <!-- change the url("") for different background using the full directory -->
				</div><div class="splash-content cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 98; visibility: visible; display: block; opacity: 1;"> 
				

					<div class="container">

						<div class="row">

							<div class="col-md-12">
                                
                                <div class="splash-text">
								    
									<h1 class="splash-headline">
										HELEN
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
                $content = 'Helen was a sounding rocket made of carbon fibre with aluminium nose tip competing in Spaceport America Cup 2019 in the 30,000 ft. apogee category with a COTS Solid motor. The use of unique bio-resin in the place of epoxy resin displayed the team’s aim to reduce environmental impact in manufacturing processes. The rocket also carried a scientific payload on-board to conduct vibrational analysis on interior components, which aids with future vibrational studies for sounding rockets in the university.';
                $pic ='demo/TEST/SAClogo2.png';
               include('rockets/mission.php');
               ?>

                <?php
               $name ='Helen';
                $content = "Breaking a national open altitude record: United Kingdom Rocketry Association has confirmed that SunrIde's rocket, Helen (named after astronaut Helen Sharman, an alumna of The University of Sheffield), that was launched in Spaceport America 2019 which recorded an apogee of 36,274 ft and speeds up to Mach 2.67, officially holds the #1 spot in the UK after breaking the previous record was set back in October 2000 by Project MARS. This was our second rocket and our second time breaking records!";
                $pic ='demo/TEST/helenlc.jpg';
               include('rockets/rocket.php');
               ?>
               
               <section id="video" class="section">
    
				<div class="section-row-container">

					<div class="section-row">

						<div class="container">

							<div class="row" >
							    
							    <div class="col-md-12">
							        
							        <h2 class="section-separator-title separator-align-left"> <span data-shadow-text="Helen Launch">Helen Launch</span> </h1>
							        
							    </div>

								<div class="col-md-10">
								    
								    <!--<div class="col-md-6">-->
								        
								        <div class="media" data-animation-name="fadeInUp">
          						            <video width="900px" height="500px"  controls >
                                                <source src="demo/TEST/helen launch.mp4" type="video/mp4">
                                            </video>
          							    </div>
								        
								    <!--</div>-->
								    
								    <!--<div class="col-md-6">
								        
								        <!--<div class="sketchfab-embed-wrapper"> <iframe width="500" height="360" src="https://sketchfab.com/models/4a0283aa01734e2ebb74a00328420bf9/embed" frameborder="0" allow="autoplay; fullscreen; vr"></div>
								        
								    </div>-->

								</div>

						    </div>
    
    				    </div>
				    
				    </div>

                </div>
                </section>
                
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