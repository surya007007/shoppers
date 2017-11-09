
<?php
		include('dbcon.php');
		if (isset($_POST['submit'])){
		$email_id=$_POST['email_address'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];

if($password == $cpassword){ ?>
<?php  
mysql_query("insert into users(email_id, password, cpassword) values ('$email_id' , '$password' , '$cpassword') ")or die(mysql_error());
?>
<script type="text/javascript">
 window.location='success.php'; 
</script>
<?php
}else{
echo " ";
}}
else
{
	if (isset($_POST['sign_submit']))
	{
		$email_id=$_POST['email_address'];
		$password=$_POST['password'];
		$query=mysql_query("select * from users where email_id='$email_id' and password='$password'")or die(mysql_error());
		$count=mysql_num_rows($query);

		if ($count  > 0)
		{ 

			$exist = ""; ?>
			<script type="text/javascript">
 			window.location='dashboard.php'; 
			</script>
<?php
		}
		else
		{
			$exist ='Email-ID or Password is incorrect!';
		}
		echo '<h4 align="center">' .$exist. '</h4>';
	}
}

?>
<html lang="en">
<head>
		<meta charset="utf-8">
		<title>Bootstrap E-commerce Templates</title>
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
					<a href="index.php" class="logo pull-left"><img src="themes/images//logo.png" class="site_logo" alt=""></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="./products.php">Woman</a>					
								<ul>
									<li><a href="./products.php">Suit and Salwar</a></li>									
									<li><a href="./products.php"></a>Tops</li>
									<li><a href="./products.php">Jeans</a></li>									
								</ul>
							</li>															
							<li><a href="./products.php">Man</a></li>
								<ul>
									<li><a href="./products.php">Shirt</a></li>									
									<li><a href="./products.php"></a>T-Shirt</li>
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
				<h4><span>Login or Regsiter</span></h4>
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span5">					
						<h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
						<form action="#" method="post">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Email ID</label>
									<div class="controls">
										<input type="text" value="<?php if (isset($_POST['submit'])){echo $email_id;} ?>" placeholder="Enter your Email-Id" name="email_address" id="email_address"  class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password</label>
									<div class="controls">
										<input type="password" value="<?php if (isset($_POST['submit'])){echo $password;} ?>"  placeholder="Password" name="password" id="password" class="input-xlarge">
									</div>
								</div>
								<div class="control-group">
									<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" name="sign_submit" value="Sign into your account"></div>
									<p class="reset">Recover your <a tabindex="4" href="#" title="Recover your username or password">username or password</a></p>
								</div>
							</fieldset>
						</form>				
					</div>
					<div class="span7">					
						<h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
						<form action="#" method="post" class="form-stacked">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Email address:</label>
									<div class="controls">
										<input type="text" name="email_address" value="<?php if (isset($_POST['submit'])){echo $email_id;} ?>" placeholder="Enter your email" class="input-xlarge" required>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label">Password:</label>
									<div class="controls">
										<input type="password" name="password" value="<?php if (isset($_POST['submit'])){echo $password;} ?>" placeholder="Password" class="input-xlarge" required>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label">Confirm Password</label>
									<div class="controls">
										<input type="password" name="cpassword" value="<?php if (isset($_POST['submit'])){echo $cpassword;} ?>" placeholder="Confirm Password" class="input-xlarge" required>
									</div>
								</div>							                            
								<div class="control-group">
									<p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
								</div>
								<hr>
								<div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" name="submit" value="Create your account"></div>
							</fieldset>
						</form>					
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
				<span>Copyright 2017 Shoopers. All right reserved.</span>
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


