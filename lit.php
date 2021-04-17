<?php

$title = 'Literature';

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
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those that don't match the search
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

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


#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* Style the navigation links */
#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
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
							    <div class="col-md-6">

								<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search for Literature.." title="Type in a category" style="border-style: solid solid solid solid;border-color:#000000;border-width:3px;">

                                    <ul id="myMenu" style="background-color:#e6e6e6;">
                                        <?php
                                        
                                        $id = "0";
                                        
                                        $table = "literature" ;
                                            
                                            $x = "location";
                                            $y = "picture";
                                            $z = "name";
                                            
                                            include('phpCore/readmedia.php');
                                        
                                        ?>
                                      
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <div class="containerx">
                                        <?php
                                        
                                            $id = "1";
                                            
                                            $table = "literature" ;
                                            
                                                $x = "location";
                                                $y = "picture";
                                                $z = "name";
                                            
                                                include('phpCore/readmedia.php');
                                        
                                        ?>
                                      
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