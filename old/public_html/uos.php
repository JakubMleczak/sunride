<?php

$title="University of Sheffield"

?>

<head>
<?php

include('phpCore/template.php')

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

include('phpCore/nav.php')

?>
<style>
    
    header {
        background-color:#18347F;
        
    }
    
    
</style>

    <div class="site-wrapper">
    
    		<div class="site-body" style="background-color:#142964;">
    
				<div class="section-row-container" style="background-color:#18347F;">

					<div class="section-row" style="padding-top:17%; padding-bottom:0%; margin:20px;">

						<div class="container">
                            
                            <div class="row">

								<div class="col-xl-12">

									<img src="demo/TEST/uos2.png" style="width:75%;height:auto;padding:0px;position:absolute;right:7%; bottom:1%;margin:auto;overflow:auto;">

								</div>
						    </div>
    
    				    </div>
				    
				    </div>

                </div>
                <div class="section-row-container">

					<div class="section-row">

						<div class="container">
                            
                            <?php
                            
                            $table = "sheff";
                            include("phpCore/readcontent.php");
                            
                            ?>
						    
    				    </div>
				    
				    </div>

                </div>
                <div class="section-row-container">

					<div class="section-row">

						<div class="container"><hr>
                            
                            <div class="row">
                                
                                <div class="col-lg-12">
                                    <h3 class="" style="color:white;">
                                    <span>Updates</span>
                                    </h3>
                                    
                                </div>
                            </div>
                                <?php
                            $pic = "demo/TEST/uosprofile.png";
                            $table = "sheff";
                            include("phpCore/readupdates.php");
                            
                            ?>
                                
						    
						    
    				    </div>
				    
				    </div>

                </div>
            
            </div>

<?php
	
	include('phpCore/footer.php')
	
?>

<style>
    
    footer {
        position:static;
        margin-top:0%;
        
    }
    
    
</style>

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

</html>