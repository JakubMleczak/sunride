<header class="site-header" style=" padding:0px;margin:0px;min-height: 1%;">

	<div class="header-inner">

		<div class="container">

			<div class="row">

				<div class="header-table col-md-12">

					<div class="brand">
						<a href="index.php">
							<img id="navlogo" src="demo/img/logosmall.png">
						</a>
					</div>

					<nav class="main-nav">
						<a href="" class="nav-toggle"></a>
						<ul class="nav">
							<li><a href="index.php">Home</a>

							</li>

							<li>
								<a href="rockets.php">Our Rockets</a>
								<span class="sub-toggle"></span>

								<ul class="sub-toggle-color">
									<li><a href="karman.php"> SS2S Karman Alpha 2021/22</a></li>
									<li><a href="space.php">Space Dart 2020/21 </a></li>
									<li><a href="vesna.php">Vesna 2020/21</a></li>
									<li><a href="sunride.php">Sunride Jr 2019/20 </a></li>
									<li><a href="helen.php">Helen 2018/19 </a></li>
									<li><a href="amy.php">Amy 2017/18 </a></li>
								</ul>
							</li>
							<li>
								<a href="blog.php">
									News
								</a>
							</li>
							<li>
								<a href="society.php">
									Society
								</a>
							</li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="partners.php">Partners</a></li>
							<li><a href="sponsors.php">Sponsors</a></li>
							<li><a href="about.php">About</a></li>
							<li class="dark">
								<div class="theme-switch-wrapper">
									<label class="theme-switch" for="checkbox">
										<input type="checkbox" id="checkbox" />
										<div class="slider round"></div>
									</label>
									<em><span class="font">Dark Mode</span></em>
								</div>

							</li>


						</ul>
					</nav>

				</div>

			</div>

		</div>

	</div>
	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
    $(function(){
        $('a').each(function(){
            if ($(this).prop('href') == window.location.href) {
                $(this).addClass('active'); $(this).parents('li').addClass('active');
            }
        });
    });
</script>

</header>