<?php

ob_start();
include "connection.php";
$userId1=$firstName="";
session_start();
// if($_SESSION['userId']!=''){
if(!empty($_SESSION['userId'])){
	$userId1=$_SESSION['userId'];
	$sql1= "select * from product_user where userId=:userId";
	$query1 = $pdo -> prepare($sql1);
	$query1 -> bindParam(':userId',$userId1,PDO::PARAM_INT);
	$query1 -> execute();
	$query1 -> setFetchMode(PDO::FETCH_ASSOC);
	
	while($rows1=$query1->fetch()){
		$firstName=$rows1['firstName'];
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
	<script src="https://kit.fontawesome.com/bafb2eb661.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">
								<img src="assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="index_2.php">Home</a>
									<!-- <ul class="sub-menu">
										<li><a href="index.php">Static Home</a></li>
										<li><a href="index_2.php">Slider Home</a></li>
									</ul> -->
								</li>
								<li><a href="about.php">About</a></li>
								<!-- <li><a href="#">Pages</a>
									<ul class="sub-menu">
										<li><a href="404.php">404 page</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="cart.php">Cart</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="contact.php">Contact</a></li>
										<li><a href="news.php">News</a></li>
										<li><a href="shop.php">Shop</a></li>
									</ul>
								</li> -->
								<!-- <li><a href="news.php">News</a>
									<ul class="sub-menu">
										<li><a href="news.php">News</a></li>
										<li><a href="single-news.php">Single News</a></li>
									</ul>
								</li> -->
								<li><a href="contact.php">Contact</a></li>
								<!-- <li><a href="shop.php">Shop</a>
									<ul class="sub-menu">
										<li><a href="shop.php">Shop</a></li>
										<li><a href="checkout.php">Check Out</a></li>
										<li><a href="single-product.php">Single Product</a></li>
										<li><a href="cart.php">Cart</a></li>
									</ul>
								</li> -->
								<li><a href="user-registration.php">Registration</a></li>
								<?php 
								if($firstName!=''){
									echo "
									<li><a href='user-logout.php'>Logout</a></li>";
								}
								else{
									echo "<li><a href='user-login.php'>Login</a></li>";
								}
								?>
								<li>
									<div class="header-icons">
									    <?php
									     //if($firstName!=''){

									    ?>
									    <a class="shopping-cart" href="wishlist.php"><i class="fa-sharp fa-solid fa-heart"></i></a>										
										<a class="shopping-cart" href="cart-backup-code.php"><i class="fas fa-shopping-cart"></i></a>
										<?php
										//  }
										//  else{

										//  }
										?>
										<a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
										<a href="">
											<?php 
											if($firstName!=''){
												echo $firstName; 
											}
										    ?>
										</a>
									</div>
								</li>
							</ul>
						</nav>
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>