<?php

$title="Rockets"

?>

<head>
<?php

include('phpCore/template.php')

?>

</head>

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

<body>

<div class="site-loader"></div>
<section id="home" class="site-splash fullscreen" style="height:20%;min-height: 200px">

			<div class="splash-slider active cycle-paused">

			<div class="splash-content cycle-slide" style="position: absolute; top: 0px; left: 0px; display: block; opacity: 1; z-index: 99; visibility: hidden;" > <!-- change the url("") for different background using the full directory -->
            
					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="splash-text">
								    
									<h1 class="splash-headline">Sunr
									<span class="text-primary"> I</span> de </h1>


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
										Rockets
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

include('phpCore/nav.php')

?>

<style>
    
    .site-header {
    
    height:300px;
    
}

</style>

<div class="site-wrapper">

			<div class="site-body">

				<section id="about" class="section">

					<div class="section-row-container">

						<div class="section-row">

							<div class="container">

								<div class="row">
								    <div class="col-lg-12">
								    <form action="" method="POST" >

                                        <select id="selectype" name="rockets" style="width:100%;min-height:70px;font-align:center;">
                                            <option value="null">Select a Rocket</option>
                                            <option value="Karman Alpha">Karman Alpha</option>
                                            <option value="Vesna">Vesna</option>
                                            <option value="Helen">Helen</option>
                                            <option value="Amy">Amy</option>
                                            <option value="sunride Jr">sunride Jr</option>
                                            <option value="SunFire">SunFire</option>
                                        </select>
                                        
                                        <br><br><br>
                                    
                                        <input type="submit" value="Select" style="width:100%;min-height:70px;" />
                                    
                                    </form>

                                    <?php
                                    
                                        $rockets = $_POST['rockets'];
                                    
                                        if ($rockets == "Karman Alpha") {
                                            $name ='Karman Alpha';
                                            $content = 'Over the course of the 2019/2020 academic year an early test version was agreed upon and designed to be manufactured and hopefully launched in July 2021. Spanning over 6m height and a radius of about 25 cm, Karman Alpha is a hybrid engine fuelled rocket that is expected to reach 35 - 50 km high, with a similar fairing system to Vesna. It should be able to facilitate 4U satellites and a static payload.';
                                            $pic ='demo/clients/2.png';
                                           include('rockets/rocket.php');
                                        }
                                    
                                        else if ($rockets == "Vesna") {
                                           $name ='Vesna';
                                            $content = "As a tribute to Helen's survival and nearly perfect conditions after recovery, Vesna named after Vesna Vulovic, the incredible Serbian flight attendant who survived a fall from 10,160 m with no parachute was a direct upgrade to her proving reliability and reusability of her system. Being a direct upgrade made Vesna the main attraction as a platform for testing and designing innovative systems. This opened to us the door to directly collaborate with another SSI project called SunSat. Providing us with a 10cm 3U cubeSat that tests a new technology for measuring high G forces while ascending, and atmospheric conditions as it descends.";
                                            $pic ='demo/clients/2.png';
                                           include('rockets/rocket.php');
                                        }
                                        
                                        else if ($rockets == "Helen") {
                                           $name ='Helen';
                                            $content = 'Helen was a sounding rocket made of carbon fibre with aluminium nose tip competing in Spaceport America Cup 2019 in the 30,000 ft. apogee category with a COTS Solid motor. The use of unique bio-resin in the place of epoxy resin displayed the team’s aim to reduce environmental impact in manufacturing processes. The rocket also carried a scientific payload on-board to conduct vibrational analysis on interior components, which aids with future vibrational studies for sounding rockets in the university.';
                                            $pic ='demo/clients/2.png';
                                           include('rockets/rocket.php');
                                        }
                                        
                                        else if ($rockets == "Amy") {
                                            $name ='Amy';
                                            $content = "Team SunrIde takes pride in being the first officially recognized UK team in history to participate in the world's largest international university rocket engineering competition, Spaceport America Cup. One of our goals is to have a team in the University of Sheffield participate every year in the annual Spaceport America Cup.
Rocket Amy was a high-power rocket that aimed to reach 10,000ft altitude in Spaceport America Cup with 4 kilograms payload carrying capacity and a solid COTS motor."
;
                                            $pic ='demo/clients/2.png';
                                           include('rockets/rocket.php');
                                        }
                                        
                                        else if ($rockets == "sunride Jr") {
                                           $name ='sunride Jr';
                                            $content = 'Teams are challenged with designing and submitting a brief technical report of a mid-power rocket with the primary goal of reaching the greatest apogee possible. Motor selection is limited to ensure a fair competition between teams.';
                                            $pic ='demo/clients/2.png';
                                           include('rockets/rocket.php');
                                        }
                                        
                                        else if ($rockets == "SunFire") {
                                           $name ='SunFire';
                                            $content = 'The low thrust output engine will use a pressure-fed system to supply fuel and oxidiser to the engine and will implement regenerative cooling to achieve high temperatures during combustion. This opens the opportunity for students to engage not only in conceptual design but also consider thermodynamics, subsonic and supersonic flows from a practical perspective.';
                                            $pic ='demo/clients/2.png';
                                           include('rockets/rocket.php');
                                        }
                                    ?>
								
								    </div>
							    </div>

				            </div>
				        
				        </div>
				    
				    </div>
				    
				
		</section>
		

	</div>

		<?php
	
	include('phpCore/footer.php')
	
	?>

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