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
						<div class="container2 ">
							<div>
								<h2 class="section-title">
									<span data-shadow-text="Gallery">Gallery</span>
								</h2>
							</div>
							<div class="page-gallery">

								<?php
								// Image extensions
								$image_extensions = array("png", "jpg", "jpeg", "gif");

								// Target directory
								$dir = 'gallery/';
								if (is_dir($dir)) {

									if ($dh = opendir($dir)) {
										$count = 1;

										// Read files
										while (($file = readdir($dh)) !== false) {

											if ($file != '' && $file != '.' && $file != '..') {

												// Image path
												$image_path = "gallery/" . $file;


												$image_ext = pathinfo($image_path, PATHINFO_EXTENSION);

												// Check its not folder and it is image file
												if (
													!is_dir($image_path) &&
													in_array($image_ext, $image_extensions)
												) {
								?>

													<!-- Image -->

													<a href="<?php echo $image_path; ?>" data-lightbox="gall" title="my caption">

														<img class="thumb" src="<?php echo $image_path; ?>">
													</a>


								<?php



												}
												$count++;
											}
										}
									}
									closedir($dh);
								}


								?>
							</div>
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