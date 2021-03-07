<?php

$title = "Team SunrIde"

?>

<head>

	<?php

	include('phpCore/template.php')

	?>

</head>

<body>

	<div class="site-loader"></div>



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
							$Rtitle = 'HELEN - OUR SECOND ROCKET';
							$Rname = 'HELEN';
							$Rdescription = '';
							$Rtitle1 = 'About Helen';
							$Rcontent1 = 'Helen was a sounding rocket made of carbon fibre with aluminium nose tip competing in Spaceport America Cup 2019 in the 30,000 ft. apogee category with a COTS Solid motor. The use of unique bio-resin in the place of epoxy resin displayed the team’s aim to reduce environmental impact in manufacturing processes. The rocket also carried a scientific payload on-board to conduct vibrational analysis on interior components, which aids with future vibrational studies for sounding rockets in the university.';
							$vidlink = 'https://www.youtube.com/embed/QAdy8fZ4ZLM';
							$Rtitle2 = 'Breaking a national open altitude record';

							$Rn1 = '916';
							$Rp1 = 'm/s speed reached';
							$Rn2 = '36274';
							$Rp2 = 'feet Apogee reached';
							$Rn3 = '121';
							$Rp3 = 'teams from around the world';
							?>
							<div class="col-md-12">
								<hgroup>
									<h4 class="text-primary text-uppercase"><?php echo $Rtitle ?></h4>
									<h3 class="section-separator-title separator-align-left"><span>Launch of our second high power rocket - HELEN</span></h3>
								</hgroup>

								<p style="text-align:justify;"> <?php echo $Rdescription ?> </p>


								<div class="spacer-20 hidden-md hidden-lg"></div>
							</div>
							<div class="grid-helen">

								<div>
									<div class="icon-box" data-animation-name="fadeInUp" style="">
										<div class="icon">
											<i class="gi gi-magic"></i>
										</div>
										<div class="info">
											<h4><?php echo $Rtitle1 ?></h4>
											<p style="text-align:justify;"><?php echo $Rcontent1 ?></p>
										</div>
									</div>
									<div>
										<div class="icon-box" data-animation-name="fadeInUp" style="">
											<div class="icon">
												<i class="gi gi-cup"></i>
											</div>
											<div class="info">
												<h4><?php echo $Rtitle2 ?></h4>

											</div>
										</div>
									</div>
								</div>

								<div>
									<div>
										<div class="media" data-animation-name="fadeInRight">
											<iframe src="<?php echo $vidlink ?>" width="560" height="315" frameBorder="0" autoplay="disabled" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										</div>
									</div>
									<div class="row numbers">

										<div class="col-md-4 col-sm-6">
											<div class="counter" data-animation-name="fadeInUp">
												<span class="number"><?php echo $Rn1 ?></span>
												<span class="label"><b><?php echo $Rp1 ?></b></span>
											</div>
										</div>
										<div class="col-md-4 col-sm-6">
											<div class="counter" data-animation-name="fadeInUp">
												<span class="number"><?php echo $Rn2 ?></span>
												<span class="label"><b><?php echo $Rp2 ?></b></span>
											</div>
										</div>

										<div class="col-md-4 col-sm-6">
											<div class="counter" data-animation-name="fadeInUp">
												<span class="number"><?php echo $Rn3 ?></span>
												<span class="label"><b><?php echo $Rp3 ?></b></b></span>
											</div>
										</div>

									</div>
								</div>

							</div>
							<a class="red-butta" href="">
								<div class="red-butt">

									Publications and Reports

								</div>
							</a>
							<a class="red-butta" href="">
								<div class="red-butt">

									Gallery

								</div>
							</a>

							<div class="pic3-grid">
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

							<?php
							$servername = "localhost";
							$username = "root";
							$password = "";
							$namee = "sunride";



							$conn = mysqli_connect($servername, $username, $password, $namee);
							mysqli_set_charset($conn, 'utf8');

							echo mysqli_error($conn);
							if (!$conn) {

								die("Connection failed: " . mysqli_connect_error());
								echo "wyeba";
							}
							?>
							<h1 class="section-title top-margin-big">
								<span data-shadow-text="The Team">The Team</span>
							</h1>

							<h2 class="top-margin">
								<span data-shadow-text="Design & Manufacturing">Design & Manufacturing</span>
							</h2>
							<div class="photo-grid">
								<?php

								$sql4 = "SELECT `Name`, `Linkedin`, `Photo`, `Role` FROM `team` INNER JOIN `Members` ON `team`.`Member_ID`=`Members`.`ID` Where `Project` = 1;
								";
								$result3 = mysqli_query($conn, $sql4);

								while ($opt = mysqli_fetch_assoc($result3)) {
									for ($i = 0; $i < 5; $i++) {


echo <<<HTML
								<div>
									<img src="$opt[Photo]" alt="">
									<div>
										$opt[Name]
									</div>
									<div>
										$opt[Role]
									</div>
									<div>
									<a href="$opt[Linkedin]">Linkedin</a>
									</div>
								</div>

HTML;
									}
								}
								?>



							</div>
							<h2 class="top-margin">
								<span data-shadow-text="Design & Manufacturing">Avionics</span>
							</h2>
							<div class="photo-grid">
								<?php

								$sql4 = "SELECT `Name`, `Linkedin`, `Photo`, `Role` FROM `team` INNER JOIN `Members` ON `team`.`Member_ID`=`Members`.`ID` Where `Project` = 1;
								";
								$result3 = mysqli_query($conn, $sql4);

								while ($opt = mysqli_fetch_assoc($result3)) {
									for ($i = 0; $i < 5; $i++) {


echo <<<HTML
								<div>
									<img src="$opt[Photo]" alt="">
									<div>
										$opt[Name]
									</div>
									<div>
										$opt[Role]
									</div>
									<div>
										<a href="$opt[Linkedin]">Linkedin</a>
										
									</div>
								</div>

HTML;
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
	<script type="text/javascript" src="assets/js/darkmode.js"></script>

	<script type="text/javascript" src="assets/plugins/royalslider/jquery.royalslider.min.js"></script>
	<script type="text/javascript" src="assets/plugins/mfp/jquery.mfp-0.9.9.js"></script>
	<script type="text/javascript" src="assets/plugins/mediaelement/mediaelement-and-player.min.js"></script>
	<script type="text/javascript" src="assets/plugins/gmap/gmap3.min.js"></script>
	<script type="text/javascript" src="assets/plugins/owlcarousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/plugins/isotope/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="assets/plugins/form/jquery.form.min.js"></script>
	<script type="text/javascript" src="assets/plugins/form/jquery.validate.min.js"></script>



</body>