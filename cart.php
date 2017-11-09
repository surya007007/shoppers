<?php include('dbcon.php'); ?>
<!DOCTYPE html>
<php lang="en">
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
							<li><a href="index.php">Your Cart</a></li>
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
									<li><a href="./products.php">Suit Salwars</a></li>									
									<li><a href="./products.php">Tops</a></li>
									<li><a href="./products.php">Jeans</a></li>									
								</ul>
							</li>															
							<li><a href="./comin_soon.php">Man</a></li>			
										
								<ul>
									<li><a href="./comin_soon.php">Shirts</a></li>									
									<li><a href="./comin_soon.php">T-Shirts</a></li>
									<li><a href="./comin_soon.php">Jeans</a></li>									
								</ul>
							<li><a href="./comin_soon.php">Sport</a>
								<ul>									
									<li><a href="./comin_soon.php">Cricket</a></li>
									<li><a href="./comin_soon.php">Football</a></li>
									<li><a href="./comin_soon.php">Tennis</a></li>
								</ul>
							</li>							
							<li><a href="./comin_soon.php">Hangbag</a></li>
							<li><a href="./products.php">Best Seller</a></li>
							<li><a href="./products.php">Top Seller</a></li>
						</ul>
					</nav>
				</div>
			</section>				
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Remove</th>
									<th>Image</th>
									<th>Product Name</th>
									<th>Quantity</th>
									<th>Unit Price</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src="themes/images/ladies/9.jpg"></a></td>
									<td>Your Bill is :</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>Rs 2,350.00</td>
									<td>Rs 2,350.00</td>
								</tr>			  
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src="themes/images/ladies/1.jpg"></a></td>
									<td>Consider the cart items Price</td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>Rs 1,150.00</td>
									<td>Rs 2,450.00</td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src="themes/images/ladies/3.jpg"></a></td>
									<td>Guuci Fashion</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>Rs 1,210.00</td>
									<td>Rs 1,123.00</td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>Rs 3,600.00</strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>What would you like to do next?</h4>
						<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Use Coupon Code
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	Rs 9900.00<br>
							<strong>Eco Tax (-2.00)</strong>: Rs 212.00<br>
							<strong>GST (27.5%)</strong>: Rs 2700.50<br>
							<strong>Total</strong>: Rs 10119.50<br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
						</p>					
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">SUB CATEGORIES</li>
								<li><a href="comin_soon.php">Jackets</a></li>
								<li class="active"><a href="comin_soon.php">Shoes</a></li>
								<li><a href="comin_soon.php">Rackets</a></li>
								<li><a href="comin_soon.php">Cardigans</a></li>
								<li><a href="comin_soon.php">Logon Jackets</a></li>
								<li><a href="comin_soon.php">Improper Jackets</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">MANUFACTURES</li>
								<li><a href="comin_soon.php">Adidas</a></li>
								<li><a href="comin_soon.php">Nike</a></li>
								<li><a href="comin_soon.php">Dunlop</a></li>
								<li><a href="comin_soon.php">Yamaha</a></li>
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
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/2.jpg"></a><br/>
													<a href="product_detail.php" class="title">Paranda</a><br/>
													<a href="#" class="category">Suspendisse aliquet</a>
													<p class="price">Rs 2061</p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<a href="product_detail.php"><img alt="" src="themes/images/ladies/4.jpg"></a><br/>
													<a href="product_detail.php" class="title">Vinayaka</a><br/>
													<a href="#" class="category">Soft Touch</a>
													<p class="price">Rs 1034</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
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
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.php";
				})
			});
		</script>		
    </body>
</html> 