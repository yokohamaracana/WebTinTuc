<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Coffee Break a Blog Category Flat Bootstarp responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo e(asset('css/bootstrap.css')); ?>" rel='stylesheet' type='text/css' />
<link href="<?php echo e(asset('css/style.css')); ?>" rel='stylesheet' type='text/css' />
<script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="<?php echo e(asset('index')); ?>"><img src="<?php echo e(asset('images/logo-1.png')); ?>" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="<?php echo e(asset('index')); ?>"  class="active">Home</a></li>
						<li><a href="<?php echo e(asset('about')); ?>">About</a></li>
						<li><a href="<?php echo e(asset('gallery')); ?>">Gallery</a></li>
						<li><a href="<?php echo e(asset('typo')); ?>">Typo</a></li>
						<li><a href="<?php echo e(asset('contact')); ?>">Contact</a></li>
					</ul>
			</div>
			<div class="header-right">
				<div class="search-bar">
					<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="">
				</div>
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<div class="banner-text">
					<h2>Aliquam erat</h2>
					<h1>Suspendisse potenti</h1>
					<div class="banner-btn">
						<a href="<?php echo e(asset('single')); ?>">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<p>Find The Most</p>
						<h3>Coffee of the month</h3>
					</div>
					<div class="about-two">
						<a href="single.html"><img src="<?php echo e(asset('images/c-1.jpg')); ?>" alt="" /></a>
						<p>Posted by <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">comments(2)</a></p>
						<p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
						<p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
						<div class="about-btn">
							<a href="single.html">Read More</a>
						</div>
						<ul>
							<li><p>Share : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
					</div>	
					<div class="about-tre">
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="<?php echo e(asset('single')); ?>"><img src="<?php echo e(asset('images/c-3.jpg')); ?>" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="<?php echo e(asset('single')); ?>">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="<?php echo e(asset('single')); ?>"><img src="<?php echo e(asset('images/c-4.jpg')); ?>" alt="" /></a>
								<h6>Find The Most</h6>
								<h3><a href="<?php echo e(asset('single')); ?>">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					<div class="abt-1">
						<h3>ABOUT US</h3>
						<div class="abt-one">
							<img src="<?php echo e(asset('images/c-2.jpg')); ?>" alt="" />
							<p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a dictum neque.</p>
							<div class="a-btn">
								<a href="single.html">Read More</a>
							</div>
						</div>
					</div>
					<div class="abt-2">
						<h3>YOU MIGHT ALSO LIKE</h3>
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="<?php echo e(asset('images/c-12.jpg')); ?>" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p>Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>	
					</div>
					<div class="abt-2">
						<h3>ARCHIVES</h3>
						<ul>
							<li><a href="<?php echo e(url('archives')); ?>">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </a></li>
						</ul>	
					</div>
					<div class="abt-2">
						<h3>NEWS LETTER</h3>
						<div class="news">
							<form>
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" />
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<!--slide-starts-->
	<div class="slide">
		<div class="container">
			<div class="fle-xsel">
			<ul id="flexiselDemo3">
				<li>
					<a href="#">
						<div class="banner-1">
							<img src="<?php echo e(asset('images/s-1.jpg')); ?>" class="img-responsive" alt="">
						</div>
					</a>
				</li>			
			</ul>
							
							 <script type="text/javascript">
								$(window).load(function() {
									
									$("#flexiselDemo3").flexisel({
										visibleItems: 5,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems: 3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
								</script>
								<script type="text/javascript" src="js/jquery.flexisel.js"></script>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<p>© 2015 Coffee Break. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html><?php /**PATH C:\xampp\htdocs\Coffe\resources\views/index.blade.php ENDPATH**/ ?>