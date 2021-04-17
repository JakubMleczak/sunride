<?php

$title = "Team SunrIde"

?>

<head>

	<?php

	include('phpCore/template.php')

	?>

</head>

<body>





	<?php

	include('phpCore/nav.php')

	?>



	<div class="site-wrapper">

		<div class="site-body">

			<section id="about" class="section">

				<div class="section-row-container">

					<div class="top-margin">
						<div class="container2 ">
							<?php
							$Rtitle = 'AMY - OUR FIRST ROCKET';
							$Rname = 'HELEN';
							$Rdescription = '';
							$Rtitle1 = 'Ground-breaking Agendas';
							$Rcontent1 = 'Team Sunride takes pride in being the first officially recognized UK team in history to participate in the largest international university rocket engineering competition, Spaceport America Cup. One of our goals is to have a team in the University of Sheffield participate every year in the annual Spaceport America Cup';
							$vidlink = 'https://www.youtube.com/embed/oAJi9oQgOrc';
							$Rtitle2 = 'James Barrowman Award';
							$Rcontent2 = "SunrIde is the award winner for the Best Flight Dynamics. We received the James Barrowman award at the Spaceport America Cup 2018 for achieving an altitude an accuracy of 99.83% under the 10,000ft. This is a substantial achievement being the first and only team from the UK to ever participate and receive an award in the largest Intercollegiate competition.";

							$Rn1 = '99.930';
							$Rp1 = '% Acuracy';
							$Rn2 = "10017";
							$Rp2 = 'feet Apogee reached';
							$Rn3 = '100';
							$Rp3 = 'teams from around the world';
							?>
							<div class="col-md-	12">
								<hgroup>
									<h4 class="text-primary text-uppercase"><?php echo $Rtitle ?></h4>
									<h3 class="section-separator-title separator-align-left"><span>LAUNCH OF OUR SECOND HIGH POWER ROCKET - AMY</span></h3>
								</hgroup>

								<p style="text-align:justify;"> <?php echo $Rdescription ?> </p>


								<div class="spacer-20 hidden-md hidden-lg"></div>
							</div>
							<div class="grid-rockets grid-rockets-equ">


								<div class="icon-box" data-animation-name="fadeInUp">
									<div class="icon">
										<i class="gi gi-magic"></i>
									</div>
									<div class="info">
										<h4><?php echo $Rtitle1 ?></h4>
										<p style="text-align:justify;"><?php echo $Rcontent1 ?></p>
									</div>
								</div>

								<div class="icon-box" data-animation-name="fadeInUp" style="">
									<div class="icon">
										<i class="gi gi-cup"></i>
									</div>
									<div class="info">
										<h4><?php echo $Rtitle2 ?></h4>
										<p style="text-align:justify;"><?php echo $Rcontent2 ?></p>

									</div>
								</div>



								<div class="video-grid">
									<div class="media max-size" data-animation-name="fadeInRight">
										<iframe src="<?php echo $vidlink ?>" width="560" height="315" frameBorder="0" autoplay="disabled" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>



							</div>
							<div class="grid-numbers">

								<div>
									<div class="counter" data-animation-name="fadeInUp">
										<span class="number"><?php echo $Rn1 ?></span>
										<span class="label"><b><?php echo $Rp1 ?></b></span>
									</div>
								</div>
								<div>
									<div class="counter" data-animation-name="fadeInUp">
										<span class="number"><?php echo $Rn2 ?></span>
										<span class="label"><b><?php echo $Rp2 ?></b></span>
									</div>
								</div>

								<div>
									<div class="counter" data-animation-name="fadeInUp">
										<span class="number"><?php echo $Rn3 ?></span>
										<span class="label"><b><?php echo $Rp3 ?></b></b></span>
									</div>
								</div>

							</div>
								<a class="button-mid" href="">
							    	<div class="icon-box" data-animation-name="fadeInUp" style="">
										<div class="icon">
											<i class="gi gi-folder-open"></i>
										</div>
										<div class="info color-font">
											<h4>Publications and Reports</h4>
											
										</div>
									</div>
								
							</a>
							<a class="button-mid" href="gallery.php">
							    	<div class="icon-box" data-animation-name="fadeInUp" style="">
										<div class="icon">
											<i class="gi gi-camera"></i>
										</div>
										<div class="info color-font">
											<h4>Gallery</h4>
											
										</div>
									</div>
								
							</a>
						</div>
						
							<div class="div-color ">
								<div class="container2 ">
									<div class="pic3-grid space">
										<div>
											<img src="test.JPG" alt="">
										</div>
										<div>
											<img src="test.JPG" alt="">
										</div>
										<div>
											<img src="test.JPG" alt="">
										</div>

									</div>
								</div>
							</div>
						
						<div class="container2 ">
							<?php
							include('phpCore/conn.php');

							?>
							<h1 class="section-title top-margin-big">
								<span data-shadow-text="The Team">The Team</span>
							</h1>


							<div class="photo-grid">
								<?php

								$sql4 = "SELECT `Name`, `Linkedin`, `Photo`, `Role` FROM `team` INNER JOIN `members` ON `team`.`Member_ID`=`members`.`ID` Where `Project` = 1 Order by `Member_ID`;
								";
								$result3 = mysqli_query($conn, $sql4);
								?>


								<?php
								while ($opt = mysqli_fetch_assoc($result3)) {



									echo <<<HTML
								<div>
									<img src="$opt[Photo]" alt="">
									<div class="ph-des">
										$opt[Name]
									</div>
									<div class="ph-role">
										$opt[Role]
									</div>
									

HTML;
									if ($opt["Linkedin"] != null) {
										echo <<<HTML
									<div>
								<a href="$opt[Linkedin]">Linkedin</a>
									</div>
								</div>
HTML;
									} else {
										echo <<<ENDS
								</div>
ENDS;
									}
								}

								?>



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
	<!-- <script type="text/javascript" src="assets/js/darkmode.js"></script> -->

	<script type="text/javascript" src="assets/plugins/royalslider/jquery.royalslider.min.js"></script>
	<script type="text/javascript" src="assets/plugins/mfp/jquery.mfp-0.9.9.js"></script>
	<script type="text/javascript" src="assets/plugins/mediaelement/mediaelement-and-player.min.js"></script>
	<script type="text/javascript" src="assets/plugins/gmap/gmap3.min.js"></script>
	<script type="text/javascript" src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/plugins/isotope/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="assets/plugins/form/jquery.form.min.js"></script>
	<script type="text/javascript" src="assets/plugins/form/jquery.validate.min.js"></script>



</body>