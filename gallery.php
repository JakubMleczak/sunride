<?php

$title = "Team SunrIde"

?>

<head>

	<?php

	include('phpCore/template.php')

	?>
	<link href="assets/plugins/light/css/lightbox.css" rel="stylesheet" />

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
						<div class="container2 bottom-margin-big ">
							<div>
								<h2 class="section-title">
									<span data-shadow-text="Gallery">Gallery</span>
								</h2>
							</div>

							<?php
							// Image extensions
							$image_extensions = array("png", "jpg", "jpeg", "gif","JPG");
							// To add img to gallery just drop them in a correct folder
							// To add a new year:
							// *Create a new folder on the server for example 2022
							// * Add new entry to the array bellow in this case "Year 2022"=>"gallery/2022/"
							// First value is just what is shown in <h2> 
							// Second value is path to img (remeber to add "/" at the end)
							$years = array("Year 2020" => "gallery/2020/", "Year 2019" => "gallery/2019/");
							// Target directory
							foreach ($years as $x => $x_value) {
								
								$dir = $x_value;
								if (is_dir($dir)) {
									if ($dh = opendir($dir)) {
										$count = 1;
							?>

										<h3 class="section-title margin-top">
											<span data-shadow-text=<?php echo $x; ?>><?php echo $x; ?></span>
										</h3>
										<div class="page-gallery">
											
											<?php

											// Read files
											while (($file = readdir($dh)) !== false) {

												if ($file != '' && $file != '.' && $file != '..') {

													// Image path
													$image_path = $dir . $file;
													
											
													
													$image_ext = pathinfo($image_path, PATHINFO_EXTENSION);
												
													// Check its not folder and it is image file
													if (
														!is_dir($image_path) &&
														in_array($image_ext, $image_extensions)
													) {
											?>

														<!-- Image -->
														
														<a href="<?php echo $image_path; ?>" data-lightbox="<?php echo $x; ?>" title="<?php echo $x; ?>">

															<img class="thumb" src="<?php echo $image_path; ?>">
														</a>


												<?php



													}
													$count++;
												}
											}
											?> </div> <?php
										}
										closedir($dh);
									}
									
								}


								?>
										
						</div>
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