<?php

$title="Team SunrIde"

?>

<head>
<!-- <link rel="stylesheet" href="style.php" media="screen">	 -->
<?php

include('phpCore/template.php')

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

.testimonial-slider:before {
    font-family: FontAwesome;
    display: inline-block;
    content: '\f10d';
    text-align: center;
    font-size: 0px;
    width: 0px;
    height: 0px;
    line-height: 64px;
    margin-bottom: 0px;
    border-radius: 0%;
    color: #fff;
    background-color: #F03434;
}

.site-header {
    
    min-height:20%;
    
}


</style>

</head>

<body>

<div class="site-loader"></div>

		<section id="home" class="site-splash fullscreen">

			<div class="splash-slider active cycle-paused">







				<div class="cycle-next"></div>
				<div class="cycle-prev"></div>

			<div class="splash-content cycle-slide" style="position: absolute; top: 0px; left: 0px; display: block; opacity: 1; z-index: 99; visibility: hidden;">
            
					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="splash-text">
								    
									<h4 class="splash-intro">
										<a href="http://sunride.group.shef.ac.uk/#">SAC 2020</a>
									</h4>
									<img scr="demo/TEST/4.png">
									<h1 class="splash-headline">SPACEPORT
										<span class="text-primary"> America</span> 2021 </h1>
									<div class="splash-description">
										<p>
											<span class="text-primary">22 - 26 June, 2021</span>
										</p>
									</div>
									<div class="splash-description">
									</div>
								</div>

							</div>

						</div>

					</div>

				</div><div class="splash-content cycle-slide cycle-slide-active" style="position: absolute; top: 0px; left: 0px; z-index: 98; visibility: visible; display: block; opacity: 1;">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="splash-text">

									<h2 class="splash-headline">Welcome to </h2>
									<img style="width:250px; margin-top:-40px;" src="./Team SunrIde_files/logoend.png">
									<!-- Logo is at the bottom of Welcome -->
									<div class="splash-description">
										<p>Sheffield University Nova Rocket Innovative Design Engineering </p>
										<p style="padding-top:20px;">The first student-led
											<span class="text-primary"> Rocket Design Team</span> to represent the UK in the world's largest international university rocket competition
											<br>
											<span class="text-primary">22 - 26 June, 2021</span>
										</p>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div><div class="splash-content cycle-slide" style="position: absolute; top: 0px; left: 0px; display: block; opacity: 1; z-index: 97; visibility: hidden;">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="splash-text">
									<h4 class="splash-intro">
										<a href="http://sunride.group.shef.ac.uk/#">TEAM SUNRIDE</a>
									</h4>
									<h1 class="splash-headline">The University of Sheffield </h1>
									<div class="splash-description">
										<p>Groundbreaking ideas that will redefine the course of rocket design in the UK</p>
									</div>
								</div>

							</div>

						</div>

					</div>

				</div></div>
			<div class="splash-media splash-media-img has-bg" style="background-position: 50% 0px; background-image: url('demo/TEST/3.jpg')"> <!-- change the url("") for different background using the full directory -->
				<div class="overlay"></div>
			</div>
            <div class="splash-feedback">
				<span class="mouse">
					<span class="fa fa-angle-down"></span>
				</span>
                
				<span class="caption">Scroll for More</span>
			</div>

		</section>

<?php

include('phpCore/nav.php')

?>

<style>
    
    .site-header {
    
    height:350px;
    
}

</style>

<div class="site-wrapper">

			<div class="site-body">

				<section id="about" class="section">

					<div class="section-row-container">

						<div class="section-row">

							<div class="container">

								<div class="row">

									<div class="col-lg-3">

										<h1 class="section-title show-counter">
											Who We Are
											<small>Learn more about us</small>
										</h1>

									</div>

									<div class="col-lg-8 col-lg-push-1">

										<div class="row">

											<div class="col-md-12">

												<p style="text-align:justify;" class="lead">
													SunrIde (Sheffield University Nova Rocket Innovative Design Engineering) is a team of students from 1st-year undergraduates to PhD students, 
													from various Science and Engineering departments of the University of Sheffield and Sheffield Hallam University. The team was formed in 2017 
													with an objective of bringing together engineering skills and innovation for amateur rocketry.<br><br>
                                                    We are a passionate team of students striving for excellence through engineering innovation with the intention of acquiring hands-on rocketry 
                                                    and space technologies experience and developing our engineering acumen. We aspire to build a platform for students of all levels of expertise
                                                    to learn and have hands-on experience in rocketry and its adjacent technologies. We aim at achieving that by integrating students’ projects into 
                                                    our rockets designs and payloads, collaborating with other universities and companies across the UK, and providing teaching materials and activities
                                                    in all forms to students thriving to learn about rocketry.<br><br>
                                                    Achieving such goals requires building a fluid team spirit. Therefore, what makes us productive and special as a team is that we provide a fair chance 
                                                    to exchange knowledge, time, and experience between all students and from alumni to current members. Following our belief of providing the best environment
                                                    to get a dynamic work ethic and the best out of individuals, we arrange socials, take part in conferences and events to encourage our members to bond and communicate better.

												</p>

											</div>

										</div>

								</div>

							</div>

						</div>
						
						<div class="section-row-container" style="background-color:#C6CAD5;">

				<div class="section-row three-quarters-padding-top three-quarters-padding-bottom">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<div class="testimonial-slider owl-carousel" data-auto-play="true" data-auto-height="true" data-single-item="true" data-animation-name="">
                                    
                                    <?php
                                    
                                    $Rname = 'REUSING HELEN!' ;
                                    $Rtitle = 'Vesna - SAC third itiration' ;
                                    $Rcaption = "Helen's rebirth after its successful launch, in a new iterated launch and design; Vesna. Using Helen’s aft body, and designing a new nosecone fairing that will carry a 3U cubesat to 30,000 ft altitude with its challenging innovative design." ;
                                    $Rlink = 'https://www.spaceportamericacup.com' ;
                                    $Rpic = 'demo/img/cuplogo.png' ;
                                    $Rpic1 = 'demo/TEST/VESNA.png' ;
                                    
                                    include('index/slider.php');
                                    
                                    ?>
                                    
                                    <?php
                                    
                                    $Rname = 'Our first Liquid rocket engine!' ;
                                    $Rtitle = 'SunFire - SACs fourth rocket' ;
                                    $Rcaption = "Combining many students’ final year projects and dissertations, Sunfire is a great liquid rocket engine that will hit 30,000 ft with its amazing technologies and combined efforts of our brilliant students." ;
                                    $Rlink = 'https://www.spaceportamericacup.com' ;
                                    $Rpic = 'demo/img/cuplogo.png' ;
                                    $Rpic1 = 'demo/TEST/sunfire.png' ;
                                    
                                    include('index/slider.php');
                                    
                                    ?>
                                    <?php
                                    
                                    $Rname = 'First step towards the Karman Line!' ;
                                    $Rtitle = 'Karman Alpha - SS2S' ;
                                    $Rcaption = "First rocket of Sheffield Shot to Space initiative, the first milestone towards reaching the Karman line, 100 km high. Karman Alpha will carry the Hybrid rocket engine to 30,000 ft!" ;
                                    $Rlink = 'http://ssi.group.shef.ac.uk/' ;
                                    $Rpic = 'demo/TEST/SSI.png' ;
                                    $Rpic1 = 'demo/TEST/ss2s.png' ;
                                    
                                    include('index/slider.php');
                                    
                                    ?>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>
			<div class="section-row-container">

			<div class="section-row">
			<!--<div id="helen">-->
			<?php
			
			$Rtitle = 'HELEN - OUR SECOND ROCKET' ;
			$Rname = 'HELEN' ;
			$Rdescription = '' ;
			$Rtitle1 = 'About Helen' ;
			$Rcontent1 = 'Helen was a sounding rocket made of carbon fibre with aluminium nose tip competing in Spaceport America Cup 2019 in the 30,000 ft. apogee category with a COTS Solid motor. The use of unique bio-resin in the place of epoxy resin displayed the team’s aim to reduce environmental impact in manufacturing processes. The rocket also carried a scientific payload on-board to conduct vibrational analysis on interior components, which aids with future vibrational studies for sounding rockets in the university.' ;
			$vidlink='https://www.youtube.com/embed/QAdy8fZ4ZLM'; 
		    $Rtitle2 = 'Breaking a national open altitude record' ;
			$Rcontent2 = 'United Kingdom Rocketry Association has confirmed that the SunrIde rocket, Helen (named after astronaut Helen Sharman, an alumna of The University of Sheffield), that was launched in Spaceport America 2019 which recorded an apogee of 36,274 ft and speeds up to Mach 2.67, officially holds the number#1 spot in the UK after breaking the previous record was set back in October 2000 by Project MARS. This was our second rocket and our second time breaking records!' ;
			$Rn1 = '916' ;
			$Rp1 = 'm/s speed reached' ;
			$Rn2 = '36274' ;
			$Rp2 = 'feet Apogee reached' ;
			$Rn3 = '121' ;
			$Rp3 = 'teams from around the world' ;
			
			include('index/rocketinfo.php') ;
			
			?>
			<!--</div>-->
			
			<!--deleted the extra closing div (Z)-->
			
			<!--========================= missing ===========================-->
			
			<!-- deleted the <div class="row">  (Z)-->
			
			<?php
			
			$Rtitle = 'AMY - OUR FIRST ROCKET' ;
			$Rname = 'AMY' ;
			$Rdescription = 'Rocket Amy was a high-power rocket that aimed to reach 10,000ft altitude in Spaceport America Cup with 4 kilograms payload carrying capacity and a solid COTS motor.' ;
			$Rtitle1 = 'Ground-breaking Agendas' ;
			$Rcontent1 = 'Team SunrIde takes pride in being the first officially recognized UK team in history to participate in the
					        largest international university rocket engineering competition, Spaceport America Cup. One of our
							goals is to have a team in the University of Sheffield participate every year in the annual Spaceport
							America Cup';
			$vidlink = 'https://www.youtube.com/embed/oAJi9oQgOrc' ;
			$Rtitle2 = 'James Barrowman Award' ;
			$Rcontent2 = 'SunrIde is the award winner for the Best Flight Dynamics. We received the James Barrowman award at the Spaceport America Cup 2018 for achieving an altitude an accuracy of 99.83% under the 10,000ft. This is a substantial achievement being the first and only team from the UK to ever participate and receive an award in the largest Intercollegiate competition.' ;
			$Rn1 = '99' ;
			$Rp1 = '% Accuracy' ;
			$Rn2 = '10017' ;
			$Rp2 = 'feet Apogee' ;
			$Rn3 = '100' ;
			$Rp3 = 'teams from around the world' ;
			
			include('index/rocketinfo.php') ;
			
			?>
			</div>
			</div>
          				
			<section class="section project-details project-details-case-study">


			<section id="idea" class="section" style="background-color:#C6CAD5;padding:20px;">
            <div class="row">
			<div class="col-xl-12">
			<div class="section-row-container">

				<div class="section-row half-padding-bottom">

					<div class="container">

						<div class="row">

							<div class="col-lg-12">
								<h2 class="section-title show-counter">
									<span data-shadow-text="Where did the idea come from?">Where did the idea come from?</span>
								</h2>
									 <p class="lead" style="text-align:justify;">
									     Inspired by the vision of SSI and the recognition gained by the projects they represented in 2017, SunrIde was the milestone set to start the journey of rocketry for the university of Sheffield. 
									     Assessed by the Automation and control systems engineering faculty (ACSE), we thrived to be a multi-university record breaking team, forging new extents to the potential of our students every year.
                                     </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </section>


        <section id="sponsor" class="section" style="padding:20px">

			<div class="section-row-container">

				<div class="section-row">

					<div class="container">

						<div class="row">

							<div class="col-xl-12">
                                <h1 class="section-title show-counter">
									<span data-shadow-text="Our Sponsors">Our Sponsors</span>


                                </h1>
                                <p class="lead"> Thanks to our wonderful sponsors! We extend our sincere appreciation to them.</p>
                                <br>
                                <div class="client-list">

                    <div class="container">
                        <div class="row">
                          	<div class="col-md-12">
    
    
                                <div class="row">
                                        <div class="col-md-6" style="align:left">
                                          <div class="icon-box vertical">
                                            <div class="logo">
                    							<a href="https://www.sheffield.ac.uk/acse" target="_blank">
                    								<img src="demo/clients/1.png" alt="ACSE"></a>
									        </div>
                                            <div class="info">
                                              <h4>ACSE Department</h4>
                                              <p>Department of Automatic Control and Systems Engineering.</p>
                                            </div>
                                          </div>
                                        </div>
                                          <div class="col-md-6" style="align:right">
                                            <div class="icon-box vertical">
                                              <div class="logo">
                                                <a href="https://www.sheffield.ac.uk/alumni/foundation" target="_blank">
                                                  <img src="demo/clients/2.png" alt="ALUMNI FOUNDATION">
                                                </a>
                                              </div>
                                              <div class="info">
                                                <h4>Alumni Foundation</h4>
                                                <p>The Alumni Foundation, University of Sheffield</p>
                                              </div>
                                            </div>
                                          </div>
                                        
                                        </div>
<div class="row">
                                            
                                            <div class="col-md-6" style="align:left">
                                                <div class="icon-box vertical">
                                                    <div class="logo">
                                                        <a href="https://www.sheffield.ac.uk/faculty/engineering" target="_blank">
                                                            <img src="demo/clients/3.png" alt="FACULTY OF ENGINEERING">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                      <h4>Faculty of Engineering</h4>
                                                      <p>University of Sheffield</p>
                                                </div>
                                              </div>
                                            </div>
                                            
                                            <div class="col-md-6 " style="align:right">
                                                <br><br>
                                                <div class="icon-box vertical">
                                                    <div class="logo">
                                                        <a href="https://www.ansys.com" target="_blank">
                                                            <img src="demo/clients/4.png" alt="ANSYS" style="width:90%;height:auto;">
                                                      	</a>
                                                    </div>
                                                    <div class="info">
                                                        <br><br>
                                                        <h4>ANSYS, Inc.</h4>
                                                        <p>ANSYS, Inc. - engineering simulation software</p>   
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <br>
                                        <div class="row">
                                            
                                            <div class="col-md-6" style="align:left">
                                                <br>
                                                <div class="icon-box vertical">
                                                    <div class="logo" >
                                                        <a href="https://shdcomposites.com/" target="_blank" >
                                                            <img src="demo/clients/5.svg" alt="SHD COMPOSITES" style="width:70%;height:auto;">
                                                        </a>
                                                        
                                                    </div>
                                                    <br>
                                                    <div class="info">
                                                      <h4>SHD Components</h4>
                                                      <p>Advanced Composite Materials and Manufacturing</p>
                                                </div>
                                              </div>
                                            </div>
                                            
                                            <div class="col-md-6 " style="align:right">
                                                <div class="icon-box vertical">
                                                    <br><br>
                                                    <div class="logo">
                                                        <a href="http://www.accomposites.co.uk/" target="_blank">
                                                            <img src="demo/clients/6.png" alt="AC COMPOSITES" style="width:90%;height:auto;">
                                                      	</a>
                                                    </div>
                                                    <div class="info">
                                                        <br><br>
                                                        <h4>AC Components</h4>
                                                        <p>Composite Materials</p>   
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                <div class="row">
                                            
                                            <div class="col-md-6" style="align:left">
                                                <div class="icon-box vertical">
                                                    <div class="logo">
                                                        <a href="https://www.amrc.co.uk" target="_blank">
                                                            <img src="demo/clients/7.png" alt="AMRC" style="width:90%;height:auto;">
                                                        </a>
                                                    </div>
                                                    <div class="info">
                                                      <h4>AMRC</h4>
                                                      <p>Advanced Manufacturing Research Center</p>
                                                </div>
                                              </div>
                                            </div>
                                            
                                            <div class="col-md-6 " style="align:right">
                                            <br>
                                                <div class="icon-box vertical">
                                                    <div class="logo">
                                                        <a href="http://https://alternum.co.uk/" target="_blank">
                                                            <img src="demo/clients/8.png" alt="ALTERNUM" style="width:55%;height:auto;">
                                                      	</a>
                                                    </div>
                                                    <div class="info">
                                                        <br>
                                                        <h4>Alternum</h4>
                                                        <p>Aerospace SME</p>   
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                
                            </div>
                        </div>
                    </div>
                                                                  
                    <div id="clients" class="section-row no-padding-top half-padding-bottom">
                        <div class="container">

                            <div class="row" data-animation-chain-duration="1500">

                                <div class="col-lg-12">

                                      <h3 class="section-separator-title separator-align-left">
                                        <span data-shadow-text="Want to sponsor us?">Want to sponsor us?</span>
                                      </h3>


                                        <p style="text-align:justify;padding:20px;"class="lead">
                                            This is a non-profit research team formed and run by students. Our goal is to improve the knowledge about space engineering in The University of Sheffield and to develop relationships with industrial partners interested in work with us. 
                                            We are currently looking for sponsorship as well as equipment and funding to develop our first rocket in order to participate in SAC (Spaceport America Cup), the world’s largest university rocket competition. 
                                            We are the first UK university in history participating in this renowned competition. <br>By sponsoring our team, you will be investing in the future of space science research and education. 
                                            Contact us to discuss the various options to promote you, including the display of your name on our new rocket, Helen.
                                            <br>If you want to participate in this amazing challenge, please <a href="#contact">contact us. </a>
                                        </p>
                                                            
    							</div>
    
    						</div>
    
    					</div>
    
    				</div>
    
    			</div>
    
    		</section>
    
    	</section>



		<section id="contact" class="section">

			<div class="section-row-container">

				<div class="section-row half-padding-bottom">

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<h1 class="section-title show-counter">
									Get in touch
									<small>Feel free to contact us if you have something to say!</small>
								</h1>
                        
                            </div>
						
						</div>
						
						<div class="col-md-4">
				    	
				    		<aside class="sidebar">
						
							<div class="lead">
								<p style="font-size:20px;">
									<strong>E: </strong>sunride-group@sheffield.ac.uk <br>
									<strong class="text-semibold">P: </strong> (+44) 739 888 4165 <br>
								</p>
						
								<div class="sidebar-block">
									<p class="lead" style="font-size:20px;">
										<strong >University of Sheffield</strong><br>
										The University of Sheffield <br> Western Bank <br> Sheffield, <br> S10 2TN <br> UK
									</p>
			            
			            		</div>
						
						    </div>
						
							</aside>
					    
					    </div>
					    
						<div class="col-md-4">
						
							<aside class="sidebar">
						
								<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fshefsunride%2F&tabs=timeline&width=1000&height=800&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
						
							</aside>
						
						</div>

					</div>
					
				</div>

			</div>

			<div class="section-row no-padding-top no-padding-bottom">
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

