<?php

$title = 'Current Projects';

?>
<style>

.is--complete.dot {
    background-image: url(...), -webkit-gradient(linear, left top, left bottom, from(rgba(110,0,160,0.3)), to(rgba(50,0,160,1)));
    border: none;
}

.filled__line__completed {
    
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    background-image: url(...), -webkit-gradient(linear, left top, left bottom, from(rgba(255,0,0,1)), to(rgba(255,0,0,0.1)));
    background-color:white;
}

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

.filled {
   background-image: url(...), -webkit-gradient(linear, left top, left bottom, from(rgba(255,0,50,0.4)), to(rgba(255,0,50,0.05)));
   background-color:white; }
   
#section-row {
    padding:0%;
    margin:0%;
}

</style>
<head>

<?php

include('phpCore/template.php');

?>
<!-- BOOTSTRAP 4 ---------------------------------------------------------------------------- -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<!-- BOOTSTRAP 4 ---------------------------------------------------------------------------- -->

<!-- Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,300italic,400italic,600italic,700italic|Droid+Serif:400,400italic">
<link rel="stylesheet" href="assets/fonts/novecento/stylesheet.css">
<link rel="stylesheet" href="assets/icons/glyphicons/style.min.css">
<link rel="stylesheet" href="assets/icons/font-awesome/font-awesome.min.css">

<!-- Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="assets/plugins/timeline/css/style.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/theme-light.css">
<link rel="stylesheet" href="assets/css/theme-dark.css">

<!-- Plugins -->

<link rel="stylesheet" href="assets/plugins/royalslider/royalslider.min.css">
<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="assets/plugins/mfp/jquery.mfp.css">

<!-- Additional styles -->



<script>
  function go() {
  var inc = 0;
  var doIt = setInterval(updateProgress, 50);

  function updateProgress() {
    inc++;
    if (inc > 100) {
      document.getElementById("output").innerHTML = "Done!";
    } else {
      document.getElementById("output").innerHTML = inc + "%";
      document.getElementById("progress1").value = inc;
    }
  }
}
</script>

</head>


<body>

<div class="site-loader" ></div>

<?php

include('phpCore/nav.php');

?>

    <div class="site-wrapper">
    
    		<div class="site-body">

                <section id="research" class="section"> <!-- <h3>Example heading <span class="badge badge-secondary">New</span></h3> -->
				<div class="section-row-container">

					<div class="section-row">

						<div class="container">

							<div class="row">

								<div class="col-xl-12">
                                    
                                    <h3 class="section-separator-title separator-align-left" ><span data-shadow-text="Current Research">Current Research</span></h3>
                                    <div class="row">

								        <?php
								        
								        $subject = 'Thrust Vector Control' ;
								        $piclink = 'demo/TEST/3.jpg' ;
								        $content = 'While VESNA has not yet launched because of the current coronavirus situation our team have already begun work on the next design. The Sunfire rocket will use a thrust vectoring system to control its angle of ascent and be the first step to both a thrust controlled flight and descent.';
								        
								        include('currentprojects/ResearchLeft.php');
								        
								        ?>
								        

						            </div>
						            <div class="row">

								     <?php
								        
								        $subject = 'Real-time in-flight GPS tracking' ;
								        $piclink = 'demo/TEST/3.jpg' ;
								        $content = 'The avionics on our current line-up of rockets logs in flight data but does not allow for active position tracking or wireless communication. This research aims to discover if it will be possible to fit each rocket with a GPS and then build a receiving antenna on the ground to communicate with the rockets while they are in flight.';
								        
								        include('currentprojects/ResearchRight.php');
								        
								        ?>
								    
						            
								    </div>
								    
								</div>

						    </div>
    
    				    </div>
				    
				    </div>

                </div>
                </section>
                
                <section id="agenda" class="section">
				<div class="section-row-container">

					<div class="section-row">

						<div class="container">

							<div class="row">

								<div class="col-xl-12">
                                    
                                    <h3 class="section-separator-title separator-align-left" ><span data-shadow-text="Agenda">Agenda</span></h3>
                                    
                                    <?php
                                    
                                    $agenda = 'Thrust Vector Control';
                                    $description = ' - To allow for active stabilisaton';
                                    $status = "progress" ;          //for status use complete,progress and null appropriately
                                    
                                    include('currentprojects/agenda.php');
                                    
                                    ?>
                                    <?php
                                    
                                    $agenda = 'Real-time in-flight GPS tracking';
                                    $description = ' - To allows our team to moniter the rocket in real time';
                                    $status = "null" ;          //for status use complete,progress and null appropriately
                                    
                                    include('currentprojects/agenda.php');
                                    
                                    ?>
                                    
                                    
								</div>

						    </div>
    
    				    </div>
				    
				    </div>

                </div>
                </section>
                <section id="progress" class="section">    
                <div class="section-row-container">

					<div class="section-row">

						<div class="container">
						    <div class="row">
						        <div class="col-xl-12">
                                    <h3 class="section-separator-title separator-align-left" ><span data-shadow-text="Project Completion">Project Completion</span></h3>
                                    <div class="progress" style="height:50px">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="background-color:red;"><span style="font-size:30px;"><b>75%</b></span></div>
                                    </div>
                                    
                                </div>

						    </div>
							<div class="row">

								<div class="col-xl-12">
                                    <div class="g--flex">
                                    <article>
                                
                                	<ul class="timeline">
                                
                                		<div class="timeline__endured">
                                
                                			<div class="aside filled">
                                
                                				<div class="aside__line filled__line">
                                
                                					<div class="filled__line__completed" style="height: 100%;" >
                                
                                					</div>
                                
                                				</div>
                                
                                			</div>
                                
                                			<li class="timeline__event is--first-day is--monday is--complete">
                                
                                				<p class="timeline__event__date">Monday 1st August</p>
                                
                                				<figure class="dot">
                                					
                                            <span class="ratio svg dot__icon">
                                                <canvas width="9px" height="9px"></canvas>
                                                <svg viewBox="0 0 9 9"><use xlink:href="/src/svg/symbols/symbols.svg#tick"></use></svg>
                                            </span>				</figure>
                                
                                				<h5 class="timeline__event__title">Project Start</h5>
                                
                                				<h6 class="timeline__event__difference"></h6>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Tuesday 2nd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Wednesday 3rd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--complete">
                                
                                				<p class="timeline__event__date">Thursday 4th August</p>
                                
                                				<figure class="dot">
                                					
                                            <span class="ratio svg dot__icon">
                                                <canvas width="9px" height="9px"></canvas>
                                                <svg viewBox="0 0 9 9"><use xlink:href="/src/svg/symbols/symbols.svg#tick"></use></svg>
                                            </span>				</figure>
                                
                                				<h5 class="timeline__event__title">Status Report</h5>
                                
                                				<h6 class="timeline__event__difference"></h6>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Friday 5th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Saturday 6th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Sunday 7th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--monday is--today">
                                
                                				<p class="timeline__event__date">Monday 8th August</p>
                                
                                				<figure class="dot">
                                					
                                            <span class="ratio svg dot__icon is--waiting">
                                                <canvas width="13px" height="3px"></canvas>
                                                <svg viewBox="0 0 13 3"><use xlink:href="/src/svg/symbols/symbols.svg#waiting"></use></svg>
                                            </span>				</figure>
                                
                                				<h5 class="timeline__event__title">Wireframing Starts</h5>
                                
                                				<h6 class="timeline__event__difference"></h6>
                                
                                			</li>
                                
                                		</div>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Tuesday 2nd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Wednesday 3rd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Thursday 4th August</p>
                                
                                				<figure class="dot">
                                				</figure>
                                
                                				<h5 class="timeline__event__title">Status Report</h5>
                                
                                				<h6 class="timeline__event__difference"></h6>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Friday 5th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Saturday 6th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Sunday 7th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--monday">
                                
                                				<p class="timeline__event__date">Monday 1st August</p>
                                
                                				<figure class="dot">
                                				</figure>
                                
                                				<h5 class="timeline__event__title">Design Starts</h5>
                                
                                				<h6 class="timeline__event__difference"></h6>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Tuesday 2nd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Wednesday 3rd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Thursday 4th August</p>
                                
                                				<figure class="dot">
                                				</figure>
                                
                                				<h5 class="timeline__event__title">Status Report</h5>
                                
                                				<h6 class="timeline__event__difference"></h6>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Friday 5th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Saturday 6th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Sunday 7th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--monday">
                                
                                				<p class="timeline__event__date">Monday 1st August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Tuesday 2nd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Wednesday 3rd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Thursday 4th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Friday 5th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Saturday 6th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Sunday 7th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--monday">
                                
                                				<p class="timeline__event__date">Monday 1st August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Tuesday 2nd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Wednesday 3rd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Thursday 4th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Friday 5th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Saturday 6th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Sunday 7th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--monday">
                                
                                				<p class="timeline__event__date">Monday 1st August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Tuesday 2nd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Wednesday 3rd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Thursday 4th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Friday 5th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Saturday 6th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Sunday 7th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--monday">
                                
                                				<p class="timeline__event__date">Monday 1st August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Tuesday 2nd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Wednesday 3rd August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				 <p class="timeline__event__date">Thursday 4th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event">
                                
                                				<p class="timeline__event__date">Friday 5th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Saturday 6th August</p>
                                
                                			</li>
                                
                                			<li class="timeline__event is--weekend">
                                
                                				<p class="timeline__event__date">Sunday 7th August</p>
                                
                                			</li>
                                
                                			<div class="aside unfilled">
                                
                                				<div class="aside__line">
                                
                                				</div>
                                
                                			</div>
                                
                                	</ul>
                                
                                </article>
                                <figure class="scene" style="background-color:white;">
                                    <?php 
                                    
                                    $activity = 'SAC - VESNA';
                                    $value = '70' ;       //only use 0 to 100 and dont use "%"
                                    
                                    include('currentprojects/progressbar.php')
                                    ?>
                                    <?php 
                                    
                                    $activity = 'SS2S - Gagarin';
                                    $value = '2' ;       //only use 0 to 100 and dont use "%"
                                    
                                    include('currentprojects/progressbar.php')
                                    ?>
                                    <?php 
                                    
                                    $activity = 'UKSEDS - SUNRIDE Jr';
                                    $value = '100' ;       //only use 0 to 100 and dont use "%"
                                    
                                    include('currentprojects/progressbar.php')
                                    ?>
                                    <?php 
                                    
                                    $activity = 'SAC - SunFire';
                                    $value = '0' ;       //only use 0 to 100 and dont use "%"
                                    
                                    include('currentprojects/progressbar.php')
                                    ?>                                   
                                </figure>
                                </div>
                                
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

