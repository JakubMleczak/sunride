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
				<iframe id="myIframe" class="wordpress" src="https://sunride.group.shef.ac.uk/newweb/blog/wordpress/" title="Iframe Example"></iframe>


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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="assets/plugins/iframe/js/iframeResizer.min.js"></script>
    <script type="text/javascript">
      /*
       * If you do not understand what the code below does, then please just use the
       * following call in your own code.
       *
       *   iFrameResize({log:true});
       *
       * Once you have it working, set the log option to false.
       */

	  iFrameResize({ log: true }, '#myIframe')
    </script>

</body>