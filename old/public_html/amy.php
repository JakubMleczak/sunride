
<?php

$title = 'Amy' ;

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
									<span class="text-primary"> America</span> 2018 </h1>


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
										AMY
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
                $content = "Team SunrIde takes pride in being the first officially recognized UK team in history to participate in the world's largest international university rocket engineering competition, Spaceport America Cup. One of our goals is to have a team in the University of Sheffield participate every year in the annual Spaceport America Cup.
Rocket Amy was a high-power rocket that aimed to reach 10,000ft altitude in Spaceport America Cup with 4 kilograms payload carrying capacity and a solid COTS motor.";
                $pic ='demo/TEST/SAClogo2.png';
               include('rockets/mission.php');
               ?>

                <?php
               $name ='Amy';
                $content = "James Barrowman Award: SunrIde is the award winner for the Best Flight Dynamics. We received the James Barrowman award at the Spaceport America Cup 2018 for achieving the most accurate altitude prediction with an altitude accuracy of 99.83%' under 10,000ft. This is a substantial achievement being the first and only team from the UK to ever participate and receive an award in the world's largest Intercollegiate competition.";
                $pic ='demo/TEST/amymodel.png';
               include('rockets/rocket.php');
               ?>
               <section id="video" class="section">
    
				<div class="section-row-container">

					<div class="section-row">

						<div class="container">

							<div class="row" >
							    
							    <div class="col-md-12">
							        
							        <h2 class="section-separator-title separator-align-left"> <span data-shadow-text="Amy Launch and Model">Amy Launch and Model</span> </h2>
							        
							    </div>

								<div class="col-md-10">
								    
								    <!--<div class="col-md-6">-->
								        
								        <div class="media" data-animation-name="fadeInRight">
          						            <iframe width="560" height="315" src="https://www.youtube.com/embed/oAJi9oQgOrc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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