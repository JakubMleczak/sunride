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
						<div class="container2">

							<div class="col-md-	12">
								<hgroup>
									<h4 class="text-primary text-uppercase">Spacefleet Ltd Partnership</h4>
									<h3 class="section-separator-title separator-align-left"><span>Space Dart</span></h3>
								</hgroup>


							</div>
							<div class="grid">
								<div class="icon-box" data-animation-name="fadeInUp">
									<div class="icon">
										<i class="gi gi-magic"></i>

									</div>
									<div class="info">
										<h4>Meet Space Dart</h4>
										<p style="text-align:justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis magni officiis totam commodi dolore, at pariatur veniam dignissimos, laborum corrupti ab harum necessitatibus ipsa, asperiores eveniet fugit suscipit quibusdam iure!



										</p>
									</div>
								</div>
								<div>
									<img src="demo/TEST/SS2Slc.JPG" alt="">
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