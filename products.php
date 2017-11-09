<?php include('dbcon.php'); ?>
<!DOCTYPE html>
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
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">				
							<li><a href="#">My Account</a></li>
							<li><a href="cart.php">Your Cart</a></li>
							<li><a href="checkout.php">Checkout</a></li>					
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
									<li><a href="./products.php">Suits and Salwars</a></li>									
									<li><a href="./products.php">Tops</a></li>
									<li><a href="./products.php">Jeans</a></li>									
								</ul>
							</li>															
							<li><a href="./products.php">Man</a></li>
								<ul>
									<li><a href="./products.php">Shirt/a></li>									
									<li><a href="./products.php">T-Shirt</a></li>
									<li><a href="./products.php">Jeans</a></li>									
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
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>New products</span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/9.jpg"></a><br/>
									<a href="product_detail.php" class="title">Geru loths</a><br/>
									<a href="#" class="category">Paranda Fashion</a>
									<p class="price">Rs 1341</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/8.jpg"></a><br/>
									<a href="product_detail.php" class="title">Thava Fasion</a><br/>
									<a href="#" class="category">Sleevless</a>
									<p class="price">Rs 946</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/7.jpg"></a><br/>
									<a href="product_detail.php" class="title">Garamantham Fashions/a><br/>
									<a href="#" class="category">Suspendisse Soft</a>
									<p class="price">Rs 3041</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<span class="sale_tag"></span>
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/6.jpg"></a><br/>
									<a href="product_detail.php" class="title">Jemellia Fashions</a><br/>
									<a href="#" class="category">Extreme Comfort</a>
									<p class="price">Rs 1449</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">                                        												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/1.jpg"></a><br/>
									<a href="product_detail.php" class="title">Measles Fashion/a><br/>
									<a href="#" class="category"> Unique congue</a>
									<p class="price">Rs 1035</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
									<a href="product_detail.php" class="title">Tempor Fashion</a><br/>
									<a href="#" class="category">Gravida Comfort</a>
									<p class="price">Rs 761</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/3.jpg"></a><br/>
									<a href="product_detail.php" class="title">Gucci Fashion </a><br/>
									<a href="#" class="category">Leave your Life</a>
									<p class="price">Rs 480</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
									<a href="product_detail.php" class="title">Paranda Fashion</a><br/>
									<a href="#" class="category">No Shrink</a>
									<p class="price">Rs 987</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="themes/images/ladies/5.jpg"></a><br/>
									<a href="product_detail.php" class="title">Qualcom Fashion</a><br/>
									<a href="#" class="category">Extreme Soft</a>
									<p class="price">Rs 2611</p>
								</div>
							</li>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="products.php">Bags</a></li>
								<li class="active"><a href="products.php">Shoes</a></li>
								<li><a href="products.php">Jackets</a></li>
								<li><a href="products.php">Cardigans</a></li>
								<li><a href="products.php">Logon Jackets</a></li>
								<li><a href="products.php">Traditional Dress</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="products.php">Adidas</a></li>
								<li><a href="products.php">Nike</a></li>
								<li><a href="products.php">Dunlop</a></li>
								<li><a href="products.php">Yamaha</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="themes/images/ladies/1.jpg"><br/>
													<a href="product_detail.php" class="title">Gucci Fashion</a><br/>
													<a href="#" class="category">Super Soft</a>
													<p class="price">Rs 2061</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<img alt="" src="themes/images/ladies/2.jpg"><br/>
													<a href="product_detail.php" class="title">Tempor Fashion</a><br/>
													<a href="#" class="category">Urna  mollis</a>
													<p class="price">Rs 1034</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Seller</h4>								
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="themes/images/ladies/3.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Gucci Top Sleevless</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="themes/images/ladies/4.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Luctus Fashion</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="themes/images/ladies/5.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Paranda Fashion</a>
								</li>   
							</ul>
						</div>
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
						<p>Do Whatever you want to do and do not forget to visit our webpage, because every day you get exciting offers.but crefully Do Whatever you want to do and do not forget to visit our webpage, because every day you get exciting offers.</p>
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
				<span>Copyright 2017 Shoppers Limited. All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>	
    </body>
</html>