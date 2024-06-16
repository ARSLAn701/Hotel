<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>A1 Biryani Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive, Smartphone Compatible web template, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<link rel="stylesheet" href="css/utility.css">
	<!-- Add jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
	<div class="banner-top">
		<div class="contact-bnr-w3-agile">
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i>adnan03@gmail.com</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>+91 9922378640</li>
				<li class="s-bar">
					<div class="search">
						<input class="search_box" type="checkbox" id="search_box">
						<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
						<div class="search_form">
							<form action="#" method="post">
								<input type="search" name="Search" placeholder=" " required=" " />
								<input type="submit" value="Search">
							</form>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>

	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">A1 Briyani<span> Shop</span>
							<p class="logo_w3l_agile_caption">Your Taste Is Our Concern</p>
						</a></h1>
				</div>

				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#dishes" class="menu__link scroll">Dishes</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Speciality</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

	<div id="home" class="banners">
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="backbanner">
							<div class="container">
								<div class="backgroundimg">
									<h3>We know what you love</h3>
									<p>Welcome | स्वागत हे | Khush Amadi </p>
									<div class="model menu__item">
										<a href="admin/reservation.php" class="menu__link" data-toggle="modal" data-target="#myModal">Order Now</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>



	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_banner_bottom">
				<h3><span>"Savor the Flavor, Spice Up Your Life!"</span> ! At our shop, we're not just serving food; we're crafting experiences.</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect ">

							<h4 class="cbp-ig-title">Less Price</h4>
							<span class="cbp-ig-category">A1 SHOP</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect heighti">
							<h4 class="cbp-ig-title">Quality Food</h4>
							<span class="cbp-ig-category">A1 SHOP</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<h4 class="cbp-ig-title">Good Taste</h4>
							<span class="cbp-ig-category">A1 SHOP</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<h4 class="cbp-ig-title">Easy To Order</h4>
							<span class="cbp-ig-category">A1 SHOP</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<!-- about -->
	<div class="about-wthree" id="about">
		<div class="container">
			<div class="ab-w3l-spa">
				<h3 class="title-w3-agileits title-black-wthree">About Our Biryani</h3>
				<p class="about-para-w3ls">A1 Biryani: Where Taste Meets Tradition. Welcome to A1 Biryani, where we celebrate the rich and diverse flavors of India in every bite. Nestled in the heart of the city, A1 Biryani is not just a restaurant; it's an experience that transports you to the bustling streets and aromatic kitchens of India.</p>
				<img src="images/banner2.jpg" class="img-responsive" alt="Banner">
				<div class="w3l-slider-img">
					<img src="images/biryani.jpg" class="img-responsive" alt="Biryani">
				</div>
				<div class="w3ls-info-about">
					<h4>You'll love all the food we offer!</h4>
					<p>Kabhi Try Karke Dekho Yaar</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Gallery -->
	<section class="portfolio-w3ls" id="dishes">
		<h3 class="title-w3-agileits title-black-wthree">Available Dishes</h3>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/biryani.jpg" class="swipebox"><img src="images/biryani.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>BIRYANI</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/tikka.jpeg" class="swipebox"><img src="images/tikka.jpeg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Chicken Tikka</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/lolipop.jpg" class="swipebox"><img src="images/lolipop.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Chicken Lolipop</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/samosa.jpg" class="swipebox"><img src="images/samosa.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Chicken Samosa</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/kheema.jpg" class="swipebox"><img src="images/kheema.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Chicken Kheema</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/fish.jpg" class="swipebox"><img src="images/fish.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Bangda Fish Fry</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/poplet.jpg" class="swipebox"><img src="images/poplet.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Pomfret Fry</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/masala.webp" class="swipebox"><img src="images/masala.webp" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Chicken Masala</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</section>
	<!-- 
	<!-- rooms & rates -->
	<div class="plans-section" id="rooms">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Food And Rates</h3>
			<div class="priceing-table-main">
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/biryani.jpg" alt=" " class="img-responsive" />
							<h4>Biryani</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								<p>For 1 late</p>
							</div>
							<div class="price-selet">
								<h3><span>Rs</span>70</h3>
								<a href="admin/reservation.php">Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/tikka.jpeg" alt=" " class="img-responsive" />
							<h4>Chicken Tikka</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								<p>100-Full & 50-Half</p>
							</div>
							<div class="price-selet">
								<h3><span>Rs.</span>100</h3>
								<a href="admin/reservation.php">Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/lolipop.jpg" alt=" " class="img-responsive" />
							<h4>Chicken Lolipop</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								<p>Per Piece</p>
							</div>
							<div class="price-selet">
								<h3><span>Rs.</span>20</h3>
								<a href="admin/reservation.php">Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/samosa.jpg" alt=" " class="img-responsive" />
							<h4>Chicken Samosa</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
								<p>Per Piece</p>
							</div>
							<div class="price-selet">
								<h3><span>Rs.</span>10</h3>
								<a href="admin/reservation.php">Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<!-- contact -->
	<section class="contact-w3ls" id="contact">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
				<div class="contact-agileits">
					<h4>Contact Us</h4>
					<p class="contact-agile2">Sign Up For Exclusive Offers</p>
					<form method="post" name="sentMessage" id="contactForm" action="admin/submission.php">
						<div class="control-group form-group">
							<label class="contact-p1">Full Name:</label>
							<input type="text" class="form-control" name="name" id="name" required>
							<p class="help-block"></p>
						</div>
						<div class="control-group form-group">
							<label class="contact-p1">Phone Number:</label>
							<input type="tel" class="form-control" name="phone" id="phone" required>
							<p class="help-block"></p>
						</div>
						<div class="control-group form-group">
							<label class="contact-p1">Email Address:</label>
							<input type="email" class="form-control" name="email" id="email" required>
							<p class="help-block"></p>
						</div>
						<div class="control-group form-group">
							<label class="contact-p1">Opinion :</label>
							<input type="text" class="form-control" name="opinion" id="opinion" required>
							<p class="help-block"></p>
						</div>
						<input type="submit" name="sub" value="Send Now" class="btn btn-primary">
					</form>

				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
				<h4>Connect With Us</h4>
				<p class="contact-agile1"><strong>Phone :</strong>+91 9922378640</p>
				<p class="contact-agile1"><strong>Email :</strong>adnan03@gmail.com</p>
				<p class="contact-agile1"><strong>Address :</strong>Trimbakeshwar,Nashik</p>

				<iframe src="https:">
					<div class=" clearfix">
					</div>
			</div>
		</div>
	</section>

	<!-- /contact -->
	<div class="copy">
		<p>© 2024 A1 Biryani . All Rights Reserved | Design by <a href="index.php">A1</a>Develop <a href="https://www.instagram.com/imarslan_07/"> Arslan Deshmukh</a> </p>
	</div>

	<!--/footer -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script src="js/jqBootstrapValidation.js"></script>

	<!-- /contact form -->

	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>

	<!-- image slider intro wala -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {

			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--search-bar-->
	<script src="js/main.js"></script>

	<script>
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default',
				width: 'auto',
				fit: true,
				closed: 'accordion',
				activate: function(event) {
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {

			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>