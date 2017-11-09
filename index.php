<?php 
	include('dbcon.php'); ?>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Merchandise Store</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">      
		<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="themes/css/bootstrappage.css" rel="stylesheet"/>
		<link href="themes/css/flexslider.css" rel="stylesheet"/>
		<link href="themes/css/main.css" rel="stylesheet"/>
		<script src="themes/js/jquery-1.7.2.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>				
		<script src="themes/js/superfish.js"></script>	
		<script src="themes/js/jquery.scrolltotop.js"></script>
	</head>
    <body>		
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form" name="">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Logout</a></li>					
							<li><a href="register.php">Login</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href="index.php" class="logo pull-left"><img src="themes/images/logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.php">Woman</a>					
								<ul>
									<li><a href="./products.php">Suit and Salwar</a></li>									
									<li><a href="./products.php">Tops</a></li>
									<li><a href="./products.php">Lagies</a></li>									
								</ul>
							</li>															
							<li><a href="./products.php">Man</a></li>	
								<ul>
									<li><a href="./products.php">Shirt</a></li>									
									<li><a href="./products.php">T-Shirt</a></li>
									<li><a href="./products.php">Tops</a></li>
								</ul>		
							<li><a href="./products.php">Sport</a>
								<ul>									
									<li><a href="./products.php">Cricket</a></li>
									<li><a href="./products.php">Football</a></li>
									<li><a href="./products.php">Tennis</a></li>
								</ul>
							</li>							
							<li><a href="./products.php">Hangbag</a></li>
							<li><a href="./products.php">Best Seller</a></li>
							<li><a href="./products.php">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="themes/images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Rare Casual Half Sleeve Solid Women Top</a><br/>
														<a href="products.php" class="category">Casual Half Top</a>
														<p class="price">Rs 1725</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Quis Top</a><br/>
														<a href="products.php" class="category">Black</a>
														<p class="price">Rs 1250</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Know exactly turned</a><br/>
														<a href="products.php" class="category">Black</a>
														<p class="price">Rs 920</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Casual Top</a><br/>
														<a href="products.php" class="category">Easy Fit</a>
														<p class="price">Rs 645</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Know exactly</a><br/>
														<a href="products.php" class="category">Casual</a>
														<p class="price">Rs 2230</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Casual orange</a><br/>
														<a href="products.php" class="category">Sleeves</a>
														<p class="price">Rs 405</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Glow water Top</a><br/>
														<a href="products.php" class="category">World Famous</a>
														<p class="price">Rs 596</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Quis Gucci</a><br/>
														<a href="products.php" class="category">Gucci</a>
														<p class="price">Rs 2250</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="themes/images/cloth/5.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Ut wisi enim ad</a><br/>
														<a href="products.php" class="category">Commodo consequat</a>
														<p class="price">Rs 2550</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/6.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.php" class="category">Quis nostrud</a>
														<p class="price">Rs 1755</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/7.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Know exactly turned</a><br/>
														<a href="products.php" class="category">Quis nostrud</a>
														<p class="price">Rs 680</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/8.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">You think fast</a><br/>
														<a href="products.php" class="category">World once</a>
														<p class="price">Rs 800</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/9.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title"> Channel Fashion</a><br/>
														<a href="products.php" class="category">Channel</a>
														<p class="price">Rs 480</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/9.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Gucci  Fashion</a><br/>
														<a href="products.php" class="category">Best Fit</a>
														<p class="price">Rs 1350</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/8.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Prada Fashion</a><br/>
														<a href="products.php" class="category">World once</a>
														<p class="price">Rs 1453</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/7.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Gucci Fashion</a><br/>
														<a href="products.php" class="category">Gucci</a>
														<p class="price">Rs 651</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.php"><img src="themes/images/cloth/5.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Ut wisi enim ad</a><br/>
														<a href="products.php" class="category">Commodo consequat</a>
														<p class="price">Rs 2550</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/6.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.php" class="category">Quis nostrud</a>
														<p class="price">Rs 1755</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/7.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Know exactly turned</a><br/>
														<a href="products.php" class="category">Quis nostrud</a>
														<p class="price">Rs 680</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/8.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">You think fast</a><br/>
														<a href="products.php" class="category">World once</a>
														<p class="price">Rs 800</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/9.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title"> Channel Fashion</a><br/>
														<a href="products.php" class="category">Channel</a>
														<p class="price">Rs 480</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/9.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Gucci  Fashion</a><br/>
														<a href="products.php" class="category">Best Fit</a>
														<p class="price">Rs 1350</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/8.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Prada Fashion</a><br/>
														<a href="products.php" class="category">World once</a>
														<p class="price">Rs 1453</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.php"><img src="themes/images/cloth/7.jpg" alt="" /></a></p>
														<a href="product_detail.php" class="title">Gucci Fashion</a><br/>
														<a href="products.php" class="category">Gucci</a>
														<p class="price">Rs 651</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
				
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Best Website For Cloths, Visit it Everyday .</p>									
									</div>	
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>You can get all of the printing receipt as well coupons for future discount.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>If you want to know about the following queries then please contact us.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.php">Homepage</a></li>  
							<li><a href="./about.php">About Us</a></li>
							<li><a href="./contact.php">Contact Us</a></li>
							<li><a href="./cart.php">Your Cart</a></li>
							<li><a href="./register.php">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Do Whatever you want to do and do not forget to visit our webpage, because every day you get exciting offers. </p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2017 Shoppers Limited.  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
//</html>
?>