<?php

$title = 'SunrIde Team 2018';

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
<div id = "sac" class="site-wrapper">

	<div class="site-body">
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
          SunrIde 2018 was a team of 26 people altogether and the winner of the James Barrowman award, awarded for the best flight dynamics. The team included members from first year undergraduates to PhD students who agreed upon the idea that space technology is the key to the future.

        </p>
      </div>

    </div>
    

    <?php 
    $table = 'SAC2018' ;
     $team = 'SunrIde - SAC';
     $rocket = 'Spaceport America Cup';
     
     include('2020/pics.php');
     
     ?>

    </div>

  </div>


		<section class="section project-details project-details-case-study">

			<div class="section-row-container">

				<div class="section-row three-quarters-padding-bottom page-title project-title">

					<div class="container">

						<div class="row">

							<div class="col-md-12">

								<h1 class="section-title text-center">
									Spaceport America Cup 2018
									<small><a href = 'https://www.spaceportamericacup.com/about-the-event.html' target="_blank">SA Cup</a> is the world's largest intercollegiate rocket engineering conference and competition</small>
								</h1>

							</div>

						</div>

					</div>

				</div>

				<div class="section-row no-padding-top no-padding-bottom project-media project-media-nearby-slider shadow-bg">

					<div class="media-container">

						<div class="photoset">

							<div class="photo media">
								<figure>
									<img src="demo/sac/4.jpg">
								</figure>
							</div>
							<div class="photo media">
								<figure>
									<img src="demo/sac/2.jpg">
								</figure>
							</div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/1.jpg">
								</figure>
							</div>
							<div class="photo media">
								<figure>
									<img src="demo/sac/5.jpg">
								</figure>
							</div>
							<div class="photo media">
								<figure>
									<img src="demo/sac/3.jpg">
								</figure>
							</div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/6.jpg">
								</figure>
							</div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/7.jpg">
								</figure>
							</div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/8.jpg">
								</figure>
							</div>

              <div class="photo media">
                <figure>
                  <img src="demo/sac/15.png">
                </figure>
              </div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/9.jpg">
								</figure>
							</div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/10.jpg">
								</figure>
							</div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/11.jpg">
								</figure>
							</div>

							<div class="photo media">
								<figure>
									<img src="demo/sac/14.jpg">
								</figure>
							</div>




						</div>

					</div>

				</div>

		</div>

	<?php
	
	include('phpCore/footer.php');
	
	?>

	</div>
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

</html>
