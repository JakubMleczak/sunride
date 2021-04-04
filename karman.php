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

							<div class="col-md-	12">
								<hgroup>
									<h4 class="text-primary text-uppercase">First step towards the Karman Line!</h4>
									<h3 class="section-separator-title separator-align-left"><span>Karman Alpha - SS2S</span></h3>
								</hgroup>


							</div>
							<div class="grid">
								<div class="icon-box" data-animation-name="fadeInUp">
									<div class="icon">
										<i class="gi gi-magic"></i>

									</div>
									<div class="info">
										<h4>MEET KARMAN ALPHA</h4>
										<p style="text-align:justify;">Over the course of the 2019/2020 academic year an early test version was agreed upon and designed to be manufactured and hopefully launched in July 2021. Spanning over 6m height and a radius of about 25 cm, Karman Alpha is a hybrid engine fuelled rocket that is expected to reach 35 - 50 km high, with a similar fairing system to Vesna. It should be able to facilitate 4U satellites and a static payload.



										</p>
									</div>
								</div>
								<div>
									<img src="demo/TEST/SS2Slc.JPG" alt="">
								</div>
							</div>

							<a class="red-butta" href="">
								<div class="red-butt">

									Publications and Reports

								</div>
							</a>
							<a class="red-butta" href="gallery.php">
								<div class="red-butt">

									Gallery

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