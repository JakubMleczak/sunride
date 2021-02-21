<?php

$title = 'Karman Alpha' ;

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
								    
									<h1 class="splash-headline">Sheffield
									<span class="text-primary"> Shot to</span> Space </h1>


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
										Karman Alpha
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
                $content = 'Sheffield Shot 2 Space is a collaborative effort between the Universities of Sheffield, Sheffield Hallam, and Kingston. A multi-year long project was set up and set sail on September 2019 to create a platform for academics and senior students to pour their knowledge and projects into becoming the first UK universities to reach the Karman Line.';
                $pic ='demo/TEST/SSI.png';
               include('rockets/mission.php');
               ?>

                <?php
               $name ='Karman Alpha';
                $content = 'Over the course of the 2019/2020 academic year an early test version was agreed upon and designed to be manufactured and hopefully launched in July 2021. Spanning over 6m height and a radius of about 25 cm, Karman Alpha is a hybrid engine fuelled rocket that is expected to reach 35 - 50 km high, with a similar fairing system to Vesna. It should be able to facilitate 4U satellites and a static payload.';
                $pic ='demo/TEST/SS2Slc.JPG';
               include('rockets/rocket.php');
               ?>
              
               <section id="countdown" class="section">
    
				<div class="section-row-container">

					<div class="section-row">

						<div class="container">

							<div class="row" >
							    
							    <div class="col-md-12">
							        
							        <h2 class="section-separator-title separator-align-left"> <span data-shadow-text="Approximate Time Till launch">Approximate Time Till launch</span> </h1>
							        
							    </div>

								<div class="col-lg-12">
								    
                                    <div data-type="countdown" data-id="2094034" class="tickcounter" style="width: 80%;height:20%; position: relative; padding-bottom: 25%"><a href="//www.tickcounter.com/countdown/2094034/" title=".">.</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a></div>
                                    <script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script> 

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

