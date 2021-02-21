<?php

$title = '3D Models';

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
<!-- Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,300italic,400italic,600italic,700italic|Droid+Serif:400,400italic">
<link rel="stylesheet" href="assets/fonts/novecento/stylesheet.css">
<link rel="stylesheet" href="assets/icons/glyphicons/style.min.css">
<link rel="stylesheet" href="assets/icons/font-awesome/font-awesome.min.css">

<!-- Styles -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.min.css">
<link rel="stylesheet" href="assets/css/theme-light.css">
<link rel="stylesheet" href="assets/css/theme-dark.css">

<!-- Plugins -->

<link rel="stylesheet" href="assets/plugins/royalslider/royalslider.min.css">
<link rel="stylesheet" href="assets/plugins/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="assets/plugins/mfp/jquery.mfp.css">

<!-- Additional styles -->

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Show filtered elements
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current control button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

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

.containerx {
  overflow: hidden;
}

.filterDiv {
  float: left;
  background-color: #2196F3;
  color: #ffffff;
  width: 500px;
  line-height: 500px;
  text-align: center;
  margin: 2px;
  display: none; /* Hidden by default */
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
}

/* Add a light grey background on mouse-over */
.btn:hover {
  background-color: #ddd;
}

/* Add a dark background to the active button */
.btn.active {
  background-color: #666;
  color: white;
}

</style>

</head>

<body>

<div class="site-loader"></div>

<?php

include('phpCore/nav.php');

?>

    <div class="site-wrapper">
    
    		<div class="site-body">
    
				<div class="section-row-container">

					<div class="section-row">

						<div class="container">

							<div class="row">

								<div class="col-xl-12">
								    <div id="myBtnContainer">
								      <span style="position:fixed;right:0%;bottom:80%;background-color:#f5f5f5;overflow:visible;border-style: none none solid solid;border-bottom-color:#d9d9d9;border-left-color:#b3b3b3;">
								      <nav class="main-nav">
				                      <a href="#" class="nav-toggle"></a>
				                      <ul class="nav">
                                      <li><a href="#"><button class="btn active" onclick="filterSelection('all')" style="border-style: none none solid solid;border-bottom-color:#3d3d3d;border-left-color:#000000;"> Show all</button></a></li>
                                      <li><a href="#"><button class="btn" onclick="filterSelection('UKSEDS')" style="border-style: none none solid solid;border-bottom-color:#d9d9d9;border-left-color:#b3b3b3;"> UKSEDS</button></a></li>
                                      <li><a href="#"><button class="btn" onclick="filterSelection('SAC')" style="border-style: none none solid solid;border-bottom-color:#d9d9d9;border-left-color:#b3b3b3;"> SAC</button></a></li>
                                      <li><a href="#"><button class="btn" onclick="filterSelection('SS2S')" style="border-style: none none solid solid;border-bottom-color:#d9d9d9;border-left-color:#b3b3b3;"> SS2S</button></a></li>
                                      </ul>
					                  </nav>
                                      </span>
                                      
                                    </div>
                                </div>
                                
                                <div class="col-xl-12">
                                    <!-- The filterable elements. Note that some have multiple class names (this can be used if they belong to multiple categories) -->
                                    <div class="containerx">
                                        <?php
                                        
                                            $id = "2";
                                            
                                            $table = "models" ;
                                            
                                                $x = "location";
                                                $y = "team";
                                                $z = "picture";
                                            
                                                include('phpCore/readmedia.php');
                                        
                                        ?>
                                      <!--<div class="filterDiv UKSEDS">UKSEDS</div>
                                      <div class="filterDiv SAC">SAC</div>
                                      <div class="filterDiv SAC">SAC</div>
                                      <div class="filterDiv SAC">SAC</div>
                                      <div class="filterDiv SAC">SAC</div>
                                      <div class="filterDiv SS2S">SS2S</div>-->
                                    </div>
                                    
								</div>

						    </div>
    
    				    </div>
				    
				    </div>

                </div>
                <div class="section-row-container">

					<div class="section-row">

						<div class="container">

							<div class="row">
							    <br><br>
							</div>
    
    				    </div>
				    
				    </div>

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

</body>

</html>