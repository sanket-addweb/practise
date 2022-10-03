<?php

ob_start();
include "connection.php";
// session_start();
// $userId2=$_SESSION['userId'];

$catName2=$_GET['catName1'];
$pId2=$_GET['pId1'];
$pAlreadyAdded="";
$userId2="";


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Single Product</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	<script src="https://kit.fontawesome.com/bafb2eb661.js" crossorigin="anonymous"></script>

</head>
<body>
	
	<!--PreLoader-->
    <!-- <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div> -->
    <!--PreLoader Ends-->
	
	<!-- header -->
	<?php 
	include 'navbar.php'; 
	if(!empty($_SESSION['userId'])){
		$userId2=$_SESSION['userId'];
	}
	?>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search arewa -->
	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<?php 
				   try{
					$sql1="select * from `$catName2` where productId=:pId2";
					$query1=$pdo->prepare($sql1);
					$query1 ->bindParam(':pId2',$pId2,PDO::PARAM_INT);
					$query1 ->execute();
					$query1 -> setFetchMode(PDO::FETCH_ASSOC);

					while($rows1=$query1->fetch()){
						$imagePath=$rows1['imagePath'];
						$pName=$rows1['productName'];
						$pPrice=$rows1['Price'];
						
				?>
				<div class="col-md-5">
					<div class="single-product-img">
					<img src="star-admin-template-1/template/<?php echo $rows1['imagePath']; ?>" alt="" style='height:600px'>
						<!-- <img src="star-admin-template-1/template/<?php //echo $rows1['imagePath']; ?>" alt=""> -->
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3><?php echo $rows1['productName'];  ?></h3>
						<p class="single-product-pricing">
							<span>Per Item</span>
							<i class="fa-sharp fa-solid fa-indian-rupee-sign"></i><?php echo $rows1['Price']; ?>
					    </p>
						<p class="single-product-pricing">
							<span style='font-weight:bold;'>Size:</span>
							<ul><li><?php echo $rows1['dimension']; ?></li></ul>
					    </p>
						<p class="single-product-pricing">
							<span style='font-weight:bold;'>Highlight:</span>
							<?php echo $rows1['highlight']; ?>
					    </p>
						<p class="single-product-pricing">
							<span style='font-weight:bold;'>Service:</span>
							<?php echo $rows1['service']; ?>
					    </p>
						<p class="single-product-pricing">
							<span style='font-weight:bold;'>Specification:</span>
							<?php echo $rows1['specification']; ?>
					    </p>
						<p class="single-product-pricing">
							<span style='font-weight:bold;'>Description:</span>
							<?php echo $rows1['productDetail']; ?>
					    </p>
						
						<div class="single-product-form">
							<form method='post'>
								<input type="number" placeholder="1" min=1 name='pQty'>
								<!-- <a class="cart-btn" name='add-cart'><i class="fas fa-shopping-cart"></i> Add to Cart</a> -->
								<a > <input type='submit' class="cart-btn" name='add-cart' value='Add to Cart'></input></a>
								<!-- <i class="fas fa-shopping-cart"></i> -->
								<!-- <a class="cart-btn" herf='add-p-wishlist.php?catName1=<?php //echo $catName2;?>&pId1=<?php //echo $pId2;?>'><i class="fas fa-shopping-cart"></i> Wishlist</a> -->

							</form>
							<!-- <br/> -->
							<form method='post'>
								<a > <input type='submit' class="cart-btn" name='add-wishlist' value='Wishlist'></input></a>
								<!-- <i class="fas fa-shopping-cart"></i> -->
							</form>
							<p><strong>Categories: </strong><?php echo $catName2; ?></p>
							<p class='text-danger'><?php echo $pAlreadyAdded; ?></p>
						</div>
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<?php
				        }
			        }
			        catch(PDOException $e){
			        die("Error in fetching data" .$e->getMessage());
			        }
				?>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<!-- <div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-1.jpg" alt=""></a>
						</div>
						<h3>Strawberry</h3>
						<p class="product-price"><span>Per Kg</span> 85$ </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-2.jpg" alt=""></a>
						</div>
						<h3>Berry</h3>
						<p class="product-price"><span>Per Kg</span> 70$ </p>
						<a href="cart.php" class="cart-btn" name='add-cart'><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.php"><img src="assets/img/products/product-img-3.jpg" alt=""></a>
						</div>
						<h3>Lemon</h3>
						<p class="product-price"><span>Per Kg</span> 35$ </p>
						<a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end more products -->

	<!-- logo carousel -->
	<!-- <div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/1.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/2.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/3.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/4.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/5.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end logo carousel -->

	<!-- footer -->
	<?php include 'footer.php' ?>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->
	
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>

<?php

if(isset($_POST['add-cart'])){

	if($userId2==''){
		header("Location:user-login.php");
	}
	else{
		$pQty=$_POST['pQty'];
		echo $pQty;
	
			$sql2 = "insert into add_cart (userId,categoryName,pId, pName, price, pQty,p_img_path) values(:userId,:catName,:pId,:pName,:price,:pQty,:p_img_path)";
			// echo $sql2;
			$query2 = $pdo -> prepare($sql2);
			$query2 -> bindParam(':userId',$userId2,PDO::PARAM_INT);
			$query2 -> bindParam(':catName',$catName2,PDO::PARAM_STR);
			$query2 -> bindParam(':pId',$pId2,PDO::PARAM_INT);
			$query2 -> bindParam(':pName',$pName,PDO::PARAM_STR);
			$query2 -> bindParam(':price',$pPrice, PDO::PARAM_INT);
			$query2 -> bindParam(':pQty',$pQty, PDO::PARAM_INT);
			$query2 -> bindParam(':p_img_path',$imagePath, PDO::PARAM_STR);
		
			$query2 -> execute();
			$lastInsertId=$pdo->lastInsertId();
			if($lastInsertId!=""){
				echo "Data inserted successfully";
				header("Location:cart.php");
	
			}
			else{
				echo "Error in inserting record";
				$pAlreadyAdded="Your Product already added please go to cart because pId is primary key and it not allow to repetation of pId";
			}
			$query2-> setFetchMode(PDO::FETCH_ASSOC);
	}
	

}

if(isset($_POST['add-wishlist'])){
	if($userId2==''){
		header("Location:user-login.php");
	}
	else{

		$sql3 = "insert into wishlist (userId,categoryName,pId, pName, price,p_img_path) values(:userId,:catName,:pId,:pName,:price,:p_img_path)";
		// echo $sql2;
		$query3 = $pdo -> prepare($sql3);
		$query3 -> bindParam(':userId',$userId2,PDO::PARAM_INT);
		$query3 -> bindParam(':catName',$catName2,PDO::PARAM_STR	);
		$query3 -> bindParam(':pId',$pId2,PDO::PARAM_INT);
		$query3 -> bindParam(':pName',$pName,PDO::PARAM_STR);
		$query3 -> bindParam(':price',$pPrice, PDO::PARAM_INT);
		// $query3 -> bindParam(':pQty',1, PDO::PARAM_INT);
		$query3 -> bindParam(':p_img_path',$imagePath, PDO::PARAM_STR);
	
		$query3 -> execute();
		$lastInsertId1=$pdo->lastInsertId();
		if($lastInsertId1!=""){
			echo "Data inserted successfully";
			header("Location:wishlist.php");
	
		}
		else{
			echo "Error in inserting record";
			$pAlreadyAdded="Your Product already added please go to wishlist because pId is primary key and it not allow to repetation of pId";
		}
		$query3-> setFetchMode(PDO::FETCH_ASSOC);
	}
	
}



?>