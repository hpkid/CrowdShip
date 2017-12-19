<?php
	ob_start();
	session_start();
	if (!empty($_SESSION["username"]) && !empty($_SESSION["password"])){
		header("Location:shop.php");
	}
	else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shipper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6 ">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +6 996 696 9696</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> trungminhhoang@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="shop.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Language
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
										<li><a href="">English</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									EURO
									<span class="caret"></span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i>Hi, Guest </a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login.php" class="active"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="shop.php">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
										<li><a href="product-details.php">Product Details</a></li> 
										<li><a href="login.php" class="active">Login</a></li> 
                                    </ul>
                                </li> 
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="post" action="#">
							<input type="text" placeholder="Username or Email" name="username"/>
							<input type="password" placeholder="Password" name="password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default" name="submit_login">Login</button>
						</form>
					</div><!--/login form-->
					<?php
						if (isset($_POST["submit_login"])){
						$db =mysqli_connect("localhost", "root", "", "shippinginfo");
						$setLang = $db->query("SET NAMES 'utf8'");
						if (!empty($_POST["username"])&& !empty($_POST["password"])) {
							$username = $_POST["username"];
							$password = $_POST["password"];
							$username = mysqli_real_escape_string($db, $username);
							$password = mysqli_real_escape_string($db, $password);
							$query = "SELECT username, password, name FROM customerinfo WHERE username = '$username' AND password = '$password'";
							$sql = mysqli_query($db,$query);
							$res = mysqli_fetch_assoc($sql);

							if ($res > 0){
									$_SESSION["username"] = $username;
									$_SESSION["password"] = $password;
									$_SESSION["name"] = $res["name"];
									echo "<script>alert('Login successed');
												location.replace('shop.php');	
										  </script>";
									
								}
							else {
									echo "<script>alert('Username or Password is incorrect. Please try again!');</script>";
								} 
						} 
						else {
							echo "<script>alert('Username or Password is incorrect. Please try again!!!');</script>";
						}
						mysqli_close($db);
					}
					?>
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post" action="#">
							<input type="text" name="name" placeholder="Name"/>
							<input type="text" name="username" placeholder="Username"/>
							<input type="password" name="password" placeholder="Password"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="text" name="facebook" placeholder="Facebook"/>
							<input type="text" name="phone" placeholder="Phone"/>

							<button type="submit" class="btn btn-default" name="submit_signup">Signup</button>
						</form>
					</div><!--/sign up form-->
					<?php
						if (isset($_POST["submit_signup"])){
						$db =mysqli_connect("localhost", "root", "", "shippinginfo");
						$setLang = $db->query("SET NAMES 'utf8'");
						if (!empty($_POST["username"])&& !empty($_POST["password"])) { //-------if data input is correct----------
							$username = $_POST["username"];
							$password = $_POST["password"];
							$name = $_POST["name"];
							$email = $_POST["email"];
							$facebook = $_POST["facebook"];
							$phone = $_POST["phone"];
							$username = mysqli_real_escape_string($db, $username);
							
							//check if username and phone is existed in database
							$query_username = "SELECT username FROM customerinfo WHERE username = '$username'";
							$query_phone = "SELECT phone FROM customerinfo WHERE phone = '$phone'";
							$sql = mysqli_query($db,$query_username);
							$res = mysqli_fetch_assoc($sql);
							if ($res > 0){  //-------username existed---------------
								echo "<script>alert('Username has been used. Please choose another Username. ');
												location.replace('login.php');	
										  </script>";
							} else if (mysqli_fetch_assoc(mysqli_query($db, $query_phone)) > 0) { //---------phone existed---------
								echo "<script>alert('Phone number has been used. Please choose another Phone number. ');
												location.replace('login.php');	
										  </script>";
							}
							else { //---------create data to database------------
								$query = "INSERT INTO customerinfo (username, password, phone, email, facebook, name)
											VALUES ('$username','$password','$phone','$email','$facebook','$name')";
								if (mysqli_query($db, $query)){ //-------------if succeed------------
									$_SESSION["username"] = $username;
									$_SESSION["password"] = $password;
									$_SESSION["name"] = $name;
									echo "<script>alert('Your account is activated. You can use our website now!');
												location.replace('shop.php');	
										  </script>";		
								}
								else {	//----------if fail-------
									echo "<script>alert('Failed to create your account. Please try again!');
												location.replace('login.php');	
										  </script>";	
								} 
								}
						}
						else { //---------if data input is incorrect
							echo "<script>alert('Username or Password is incorrect. Please try again!!!');</script>";
						}
					mysqli_close($db);
					}
					?>
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>e</span>-shipper</h2>
							<p>We dont fuck anymore :))</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/trung.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Nguyen Hieu Trung</p>
								<h2>Leader</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/ducminh.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Pham Duc Minh</p>
								<h2>Hotboy</h2>
							</div>
						</div>
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="images/home/hoang.jpg" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Tran Vu Hoang</p>
								<h2>Bitch</h2>
							</div>
						</div>
						
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Mikkeli, 51000 FINLAND</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<!-- <li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<!-- <li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Us</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<!-- <li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li> -->
								<li><a href="#">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2016 Hp-Kid. All rights reserved.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php
	}
?>