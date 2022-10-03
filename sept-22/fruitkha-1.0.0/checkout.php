<?php

ob_start();
include "connection.php";

$subTotal=$_GET['subtotal'];
$shipping=$_GET['shipping'];
$total=$_GET['total'];
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
						<h1>Check Out Product</h1>
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
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Billing Details
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="billing-address-form">
								    <p> <?php //submit msg here ?></p>
						        	<!-- <form id="form1" method="post"> -->
                                        <p><input type="text" placeholder="Name" id='name' name='name1'></p>
                                        <p><input type="email" placeholder="Email" id='email' name='email'></p>
                                        <p><input type="text" placeholder="Street" id='street' name='street'></p>
                                        <p><input type="text" placeholder="City" id='city' name='city'></p>
                                        <p><input type="text" placeholder="State" id='state' name='state'></p>
										<p><input type="number" placeholder="Pin code" id='pin-code' name='pin-code'></p>
                                        <!-- <p><input type="text" placeholder="Address" name='address' id="address"
                                                        oninput="myFunction()"></p> -->
                                        <p><input type="number" placeholder="Phone" id='phone' name='phone1'></p>
                                        <p><textarea name="msg1" id="bill" cols="30" rows="10"
                                            placeholder="Say Something"></textarea></p>
                                        <p>
                                            <input type="submit" name='billing-detail' value='Submit' onclick="displayData()">
                                        </p>
                                    <!-- </form> -->
						        </div>
						      </div>
						    </div>
						  </div>
						  <div class="card single-accordion">
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
						        	<?php 
									// if(!isset($_POST['billing-detail'])){
									// 	echo "<p id='print-add'>Please first fill Your Billig detail form</p>";
									// }
									// else{

									?>
										<p>Name: <span id='name2'></span></p>
										<p>Email:  <span id='email2'></span></p>
										<p>Street:  <span id='street2'></span></p>						        		
										<p>City: <span id='city2'></span></p>
										<p>State: <span id='state2'></span></p>										
										<p>Pin code: <span id='pin-code2'></span></p>
										<p>Phone: <span id='phone2'></span></p>
										<p>Message: <span id='msg2'></span></p>
										<p>
										<a href=''><input type="submit" value='Confirm' ></a>
										</p>
									<?php
									//}
									?>
									<!-- <form id="form2" method="post" > -->
						        	<!-- </form> -->
									<br/>
									<a href="get-order-detail.php?subtotal=<?php echo $subTotal;?>&shipping=<?php echo $shipping;?>"  class="cart-btn">Get Order Detail</a>
						        </div>
						      </div>
						    </div>
						  </div>
						  <!-- <div class="card single-accordion">
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

	<script>
		function displayData(){
			var txt1=document.getElementById("name").value;
			var printData=document.getElementById("name2").innerText=txt1;

			var txt2=document.getElementById("email").value;
			document.getElementById("email2").innerHTML=txt2;

			var txt3=document.getElementById("street").value;
			document.getElementById("street2").innerHTML=txt3;

			var txt4=document.getElementById("city").value;
			document.getElementById("city2").innerHTML=txt4;

			var txt5=document.getElementById("pin-code").value;
			document.getElementById("pin-code2").innerHTML=txt5;

			var txt6=document.getElementById("phone").value;
			document.getElementById("phone2").innerHTML=txt6;

			var txt7=document.getElementById("msg").value;
			document.getElementById("msg2").innerHTML=txt7;
		}
	</script>
</body>
</html>


<?php

// if(isset($_POST['billing-detail'])){
// 	$name1=$_POST['name1'];
// 	$email=$_POST['email'];
// 	$address=$_POST['address'];
// 	$phone1=$_POST['phone1'];
// 	$msg=$_POST['msg1'];

// 	$sql2='insert into order_table (userId,name,email,address,phone,orderMsg,subTotal,shipping) values(:userId,:name,:email,:address,:phone,:msg1,:subTotal,:shipping)';
// 	$query1 = $pdo -> prepare($sql2);
// 	$query1 -> bindParam(':userId',$userId2,PDO::PARAM_INT);
// 	$query1 -> bindParam(':name',$name1,PDO::PARAM_STR);
// 	$query1 -> bindParam(':email',$email,PDO::PARAM_STR);
// 	$query1 -> bindParam(':address',$address,PDO::PARAM_STR);
// 	$query1 -> bindParam(':phone',$phone1,PDO::PARAM_INT);
// 	$query1 -> bindParam(':msg1',$msg,PDO::PARAM_STR);
// 	$query1 -> bindParam(':subTotal',$subTotal,PDO::PARAM_INT);
// 	$query1 -> bindParam(':shipping',$shipping,PDO::PARAM_INT);
	
// 	$query1 -> execute();
	
// 	$lastInsertId=$pdo ->lastInsertId();
// 	if($lastInsertId!=""){
// 		// echo "Data inserted successfully";
// 		echo "<script>alert('Your Billing Detail successfully submited');</script>";
// 		// header("Location:view-order-detail.php");
// 	}
// 	else{
// 		echo "Error in inserting";
// 	}
// 	$query1 -> setFetchMode(PDO::FETCH_ASSOC);

// }

// if(isset($_POST['shipping-address'])){

// 	$name2=$_POST['name2'];
// 	$street=$_POST['street'];
// 	$city=$_POST['city'];
// 	$state=$_POST['state'];
// 	$country=$_POST['country'];
// 	$pincode=$_POST['pincode'];
// 	$phone2=$_POST['phone2'];

// 	$sql3="insert into shipping_address values(:userId,:name,:street,:city,:state,:country,:pincode,:phone)";
// 	$query2= $pdo -> prepare($sql3);
// 	$query2 -> bindParam(':userId',$userId2,PDO::PARAM_INT);
// 	$query2 -> bindParam(':name',$name2,PDO::PARAM_STR);
// 	$query2 -> bindParam(':street',$street,PDO::PARAM_STR);
// 	$query2 -> bindParam(':city',$city,PDO::PARAM_STR);
// 	$query2 -> bindParam(':state',$state,PDO::PARAM_STR);
// 	$query2 -> bindParam(':country',$country,PDO::PARAM_STR);
// 	$query2 -> bindParam(':pincode',$pincode,PDO::PARAM_INT);
// 	$query2 -> bindParam(':phone',$phone2,PDO::PARAM_INT);

// 	$query2-> execute();

// 	$lastInsertId2= $pdo -> lastInsertId();

// 	if($lastInsertId2 !=''){
// 		// echo "Data inserted successfully";
// 		echo "<script>alert('Your Address Detail successfully submited');</script>";
// 	}
// 	else{
// 		echo "Error in inserting";
// 	}
// 	$query2 -> setFetchMode(PDO::FETCH_ASSOC);
// }
?>

