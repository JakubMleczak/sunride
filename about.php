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
			<section id="contact" class="section">

				<div>

					<div class=" top-margin half-padding-bottom">

						<div class="container2">

							<div class="row">

								<div class="col-lg-12">

									<h1 class="section-title">
										Get in touch
										<small>Feel free to contact us if you have something to say!</small>
									</h1>

								</div>

							</div>

							<div class="grid div-size">



								<div class="lead2">
									<p>
										<span class="red">E:</span> sunride-group@sheffield.ac.uk <br>
										<span class="red"> P:</span> (+44) 739 888 4165 <br>
									</p>

									<div class="sidebar-block">
										<p>
											<span class="red"> University of Sheffield</span>
											<br>
											The University of Sheffield <br> Western Bank <br> Sheffield, <br> S10 2TN <br> UK
										</p>

									</div>

								</div>
								<div>
									<img src="gallery/2019//DSC_0318.JPG" alt="">
								</div>


							</div>
							<div class="grid margin-top">
								<div class="grid-img">
									<img src="4.jpg" alt="">
								</div>
								<div class="text-grid margin-top">
									<h2 class="section-title">
										<span data-shadow-text="About us">About us</span>
									</h2>
									<p class="lead" style="text-align:justify;">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur architecto ullam, accusamus libero est consequuntur error voluptas quae fugiat delectus quaerat quo numquam officiis autem, ad praesentium sed laborum!
									</p>
								</div>

							</div>
							<div class="grid margin-top">
								
								<div class="text-grid margin-top">
									<h2 class="section-title">
										<span data-shadow-text="About us">Sheffield Space Initiative</span>
									</h2>
									<p class="lead" style="text-align:justify;">
										Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam consectetur architecto ullam, accusamus libero est consequuntur error voluptas quae fugiat delectus quaerat quo numquam officiis autem, ad praesentium sed laborum!
									</p>
								</div>
								<div class="grid-img">
									<img src="Pics/about3.jpg" alt="">
								</div>
							</div>

							<div>
								<div id="about-exe">
									<?php
									include('phpCore/conn.php');

									?>
									<h1 class="section-title top-margin-big">
										<span data-shadow-text="Executive team">Executive team</span>
									</h1>
									<form method="get" action="about.php#about-exe">
										<input type="submit" class="about-butt" name="2018" value="2018">
										<input type="submit" name="2019" class="about-butt" value="2019">
										<input type="submit" name="2020" class="about-butt" value="2020">
										<input type="submit" name="2021" class="about-butt" value="2021">
									</form>

									<div class="photo-grid">
										<?php

										//id in data base
										$year = 11;
										if (isset($_GET['2018'])) {
											$year = 11;
										}
										if (isset($_GET['2019'])) {
											$year = 10;
										}
										if (isset($_GET['2020'])) {
											$year = 9;
										}
										if (isset($_GET['2021'])) {
											$year = 5;
										}

										$sql4 = "SELECT `Name`, `Linkedin`, `Photo`, `Role` FROM `team` INNER JOIN `members` ON `team`.`Member_ID`=`members`.`ID` Where `Project` = $year Order by `Member_ID`;
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
								<div id="about-exe">
									<?php
									include('phpCore/conn.php');

									?>
									<h1 class="section-title top-margin-big">
										<span data-shadow-text="Advisory Board">Advisory Board</span>
									</h1>

									<div class="photo-grid">
										<?php


										$sql4 = "SELECT `Name`, `Linkedin`, `Photo`, `Role` FROM `team` INNER JOIN `members` ON `team`.`Member_ID`=`members`.`ID` Where `Project` = 14 Order by `Member_ID`;
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
						</div>

					</div>

				</div>

				<div class="section-row no-padding-top no-padding-bottom">
				</div>
		</div>
		</section>

	</div>
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
	<script type="text/javascript" src="assets/plugins/light/js/lightbox-plus-jquery.js"></script>


</body>