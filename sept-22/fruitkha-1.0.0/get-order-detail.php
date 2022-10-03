<?php

ob_start();
include "connection.php";

$subTotal=$_GET['subtotal'];
$shipping=$_GET['shipping'];
$total=$subTotal + $shipping;

// $sql3="select * from add_cart where order-date=";
// $sql3="select * from order_table where DATE(order_date)=curdate() and minute(order_date)=minute(curtime()) and userId=$userId2";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Check Out</title>

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
	<?php include 'navbar.php'; 
	if(!empty($_SESSION['userId'])){
		$userId2=$_SESSION['userId'];
	}
	else{
		header("Location:user-login.php");
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
						<p>Fresh and Organic</p>
						<h1>Get Order Details</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- check out section -->
	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <!-- <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Details
						        </button> -->
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
                                <?php
                                $sql3="select * from order_table where DATE(order_date)=curdate() and minute(order_date)=minute(curtime()) and userId=:userId";
                                if(empty($sql3)){
                                    // header("location:checkout.php");
                                }
                                // $sql5="select * from order_table where userId=:userId and orderId=:orderId";
                                $query2=$pdo->prepare($sql3);
                                $query2->bindParam(':userId',$userId2,PDO::PARAM_INT);
                                // $query2->bindParam(':',$userId2,PDO::PARAM_INT);
                                // $query2->bindParam(':orderId',$orderId,PDO::PARAM_STR);
                                $query2->execute();
                                $query2 -> setFetchMode(PDO::FETCH_ASSOC);
                                $numRow=$query2->rowCount();
                                if($numRow==1){
                                    while($rows3=$query2->fetch()){
                                       $name=$rows3['name'];
                                       $email=$rows3['email'];
                                       $address=$rows3['address'];
                                       $phone=$rows3['phone'];
                                       $orderMsg=$rows3['orderMsg'];
                                       $subTotal=$rows3['subTotal'];
                                       $shipping=$rows3['shipping'];
                                    }
                                
                                
                                ?>
                                hey
                                <p>Name : <?php echo $name;?></p>
                                <p>Name : <?php echo $email;?></p>
                                <p>Name : <?php echo $address;?></p>
                                <p>Name : <?php echo $phone;?></p>
                                <?php
                                }
                                ?>
						        <!-- <div class="billing-address-form">
								    <p> <?php //submit msg here ?></p>
						        	<form id="form1" method="post" >
						        		<p><input type="text" placeholder="Name" name='name1'></p>
						        		<p><input type="email" placeholder="Email" name='email'></p>
						        		<p><input type="text" placeholder="Address" name='address' id="address" oninput="myFunction()"></p>
						        		<p><input type="number" placeholder="Phone" name='phone1'></p>
						        		<p><textarea name="msg1" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
										<p>
										<input type="submit" name='billing-detail' value='Submit' >
									    </p>
						        	</form>
						        </div> -->
						      </div>
                              <!-- <a href="update-order-status.php"><button>Order Now</button></a> -->
						    </div>
						  </div>
						  <!-- <div class="card single-accordion">
						    <div class="card-header" id="headingTwo">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						          Shipping Address
						        </button>
						      </h5>
						    </div>
						    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
									<p> <?php //submit msg here ?></p>
						        	<p id="print-add">Your shipping address form is here.</p>
									<form id="form2" method="post" >
						        		<p><input type="text" placeholder="Name" name='name2'></p>
						        		<p><input type="text" placeholder="Street" name='street'></p>
						        		
										<p><input type="text" placeholder="City" name='city'></p>
										<p><input type="text" placeholder="State" name='state'></p>
										<p><input type="text" placeholder="Country" name='country'></p>
										<p><input type="number" placeholder="Pin code" name='pincode' maxlength='6'></p>
						        		<p><input type="number" placeholder="Phone" name='phone2'></p>
						        		
										<input type="submit" name='shipping-address' value='Ship to this Address' >
									    </p>
						        	</form>
									<br/>
									<a href="" class="cart-btn">Get Order Detail</a>
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
						    <div class="card-header" id="headingThree">
						      <h5 class="mb-0">
						        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						          Card Details
						        </button>
						      </h5>
						    </div>
						    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="card-details">
						        	<p>Your card details goes here.</p>
						        </div>
						      </div>
						    </div>
						  </div> -->
						</div>

					</div>
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
						<table class="order-details">
							<thead>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
							    <tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
								<?php 
								 $sql4="select pName, price from add_cart where userId=:userId"; 
								 $query4=$pdo->prepare($sql4);
								 $query4->bindParam(':userId',$userId2,PDO::PARAM_INT);
								 $query4->execute();
								 $query4 -> setFetchMode(PDO::FETCH_ASSOC);

								 while($rows3=$query4->fetch()){
									$pName=$rows3['pName'];
									$price=$rows3['price'];
					
								?>
								
								<tr>
									<td><?php echo $pName;?></td>
									<td>$<?php echo $price; ?></td>
								</tr>
								<?php 
								 }
								?>
								
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td><?php echo $subTotal; ?></td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td><?php echo $shipping; ?></td>
								</tr>
								<tr>
									<td>Total</td>
									<td><?php echo $total; ?></td>
								</tr>
							</tbody>
						</table>
						<!-- <a href="#" class="boxed-btn">Place Order</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end check out section -->

	<!-- logo carousel -->
	<div class="logo-carousel-section">
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
	</div>
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

	<!-- <script>
		function myFunction(){
			var txt=document.getElementById("address").value;
			var printTxt=document.getElementById("print-add").innerHTML=txt;
		}
	</script> -->
</body>
</html>