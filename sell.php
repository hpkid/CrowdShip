<?php
	ob_start();
	session_start();
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
								<li><a href="sell.php"><i class="fa fa-user"></i> <?php
									if (!empty($_SESSION["username"])) {

										echo "Hi, ".$_SESSION["name"];
									}
									else echo "Hi, Guest"
								?></a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<!--<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<li><a href="#"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php
									if (!empty($_SESSION["username"])) {
										echo "<li><a href='logout.php'><i class='fa fa-lock'></i> Logout</a></li>";
									} else {
										echo "<li><a href='login.php'><i class='fa fa-lock'></i> Login</a></li>";
									}
								?>
								
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
										<li><a href="#">Checkout</a></li> 
										<li><a href="#">Cart</a></li> 
										<li><a href="logout.php" class="active">Logout</a></li> 
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
	
	<section id="form" style="display:block;margin-bottom:185px;margin-top:70px;overflow:hidden;"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form" style="height:500px; width:450px;"><!--login form-->
						<h2>Fill in this form to start selling your luggage</h2>
						<form method="post" action="#">
							<input type="text" placeholder="Full name" name="name"/>
							<input type="number" placeholder="Price per kg (EURO)" name="price" min="1" max="40"/>
							<input type="number" placeholder="Amount" name="amount" min="1" max="40" />
							<input type="date" placeholder="Date" name="date" />
							<span>
								<h2>From:</h2>
								<menu>
								<input type="radio" value="4" name="from" style="float:none; display:inline;" /> 
								<label>Helsinki </label>
								<input type="radio" value="2" name="from" style="float:none; display:inline;"/> 
								<label>Ho Chi Minh </label> 
								<input type="radio" value="1" name="from" style="float:none; display:inline;"/> 
								<label>Ha Noi</label>
								<input type="radio" value="3" name="from" style="float:none; display:inline;"/> 
								<label>Da Nang </label>
								</menu>	
							</span>
							<span>
								<h2>To:</h2>
								<menu>
								<input type="radio" value="4" name="to" style="float:none; display:inline;" /> 
								<label>Helsinki </label>
								<input type="radio" value="2" name="to" style="float:none; display:inline;"/> 
								<label>Ho Chi Minh </label> 
								<input type="radio" value="1" name="to" style="float:none; display:inline;"/> 
								<label>Ha Noi</label>
								<input type="radio" value="3" name="to" style="float:none; display:inline;"/> 
								<label>Da Nang </label>
								</menu>	
								</span>
							<button type="submit" class="btn btn-default" name="submit_sell">Confirm</button>
						</form>
					</div><!--/login form-->
					<?php
						if (isset($_POST["submit_sell"])){
						$db =mysqli_connect("localhost", "root", "", "shippinginfo");
						$setLang = $db->query("SET NAMES 'utf8'");
						if (!empty($_POST["name"])&& !empty($_POST["price"]) && !empty($_POST["amount"]) && !empty($_POST["date"])
							&& !empty($_POST["from"]) && !empty($_POST["to"])) { //----------check if all is filled in -------
							//-------Receive data from form---------
							$name = $_POST["name"];
							$price = (int)$_POST["price"];
							$amount = (int)$_POST["amount"];
							$date = $_POST["date"];
							$from = (int)$_POST["from"];
							$to = (int)$_POST["to"];
							//-------------------------------------
							$way = 0;//-------way == 1 means from Fin and way == 0 means from Viet
							if ($from == 4) {$way = 1;}
							if (!empty($_SESSION["username"])){
								$username = $_SESSION["username"];
							} else {
								echo "<script>alert('Please log in first!');
												location.replace('login.php');	
										  </script>";	
							}
							//---------Select ID Customer--------------------
							$query = "SELECT id FROM customerinfo WHERE username = '$username'";
							$res = mysqli_fetch_assoc(mysqli_query($db,$query));
							$seller_id = $res["id"];
							//---------Insert data to database----------------
							$query = "INSERT INTO sellinfo (seller_id, date, amount, price, way, fullname, from_addr, to_addr) 
										VALUES ('$seller_id', '$date', '$amount', '$price', '$way', '$name', '$from', '$to')";
							if (mysqli_query($db,$query)){
								echo "<script>alert('Upload info successed. Thank you!');
												location.replace('shop.php');	
										  </script>";
							}
							else {
								// echo "<script>alert('Upload info failed. Please try again!');
								// 		  </script>";
								echo mysqli_error($db) . "<br>";
								echo $name . "<br>". $way . "<br>"	;
							}
							
						} 
						else {
							echo "<script>alert('Data is incorrect. Please try again!');</script>";
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
