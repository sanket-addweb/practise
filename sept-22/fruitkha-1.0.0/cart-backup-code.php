<?php

ob_start();
include "connection.php";

// session_start();
// $userId2=$_SESSION['userId'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Cart</title>

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
	if($_SESSION['userId']==''){
		header('Location:user-login.php');
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
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- cart -->
	<div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">
						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove">Remove</th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Modify Quantity</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$userId2=$_SESSION['userId'];
								// echo $userId2;
								$sql1 = "select * from add_cart where userId=:userId";
								$query1 = $pdo -> prepare($sql1);
								$query1 -> bindParam(':userId',$userId2,PDO::PARAM_INT);
								$query1 -> execute();
								$query1 -> setFetchMode(PDO::FETCH_ASSOC);
								$numRows=$query1 ->rowcount();
							    //echo $numRows;
								while($rows1 = $query1 -> fetch()){
									$pId1=$rows1['pId'];
									// echo $pId1;
									// for($i=0;$i<$numRows;$i++){
							        //      $pId[$i]=$rows1['pId'];
								?>
								<tr class="table-body-row">
									<td class="product-remove"><a href="delete-cart-product.php?pId1=<?php echo $pId1;?>"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="star-admin-template-1/template/<?php echo $rows1['p_img_path']; ?>"  alt=""></td>
									<td class="product-name"><?php echo $rows1['pName']; ?></td>
									<td class="product-price">
										<?php echo $rows1['price']; ?>
										<input type='hidden' class='iprice' value='<?php echo $rows1['price'];?>'>
										<input type='hidden' class='ipId' value='<?php echo $rows1['pId'];?>'>
								    </td>
									<td class="product-quantity">
										<form method='post'></form>
										<input type="number" class="iquantity" placeholder="0" min=1 max='10' 
										name='modify-qty<?php //echo $i;?>' value='<?php echo $rows1['pQty'] ?>' onchange='subTotal(this.value)'>
								    </td>
									<td class="product-quantity1" id='pQuantity'></td>
									<td class='itotal'></td>
									<script>
										// var pId1='<?//=$pId1;?>';
										// console.log(pId1);
										// // var jsvar = '<?//=$var?>';
                                        // // console.log(jsvar); 
										
										// function subTotal4(qty9,pId1){
		                                // 	updateTable(qty9,pId1);
										// 	console.log(qty9);
										// 	console.log(pId1);
		                                // 	subTotal();
		                                // }
										// function updateTable(qty9,pId1){
										// 	var pId1='<?//=$pId1;?>';
										// 	var xmlhttp = new XMLHttpRequest();
                                        //     xmlhttp.onreadystatechange = function() {
                                        //       if (this.readyState == 4 && this.status == 200) {
                                        //         document.getElementById("pQuantity").innerHTML = this.responseText;
                                        //       }
                                        //     };
                                        //     xmlhttp.open("GET","update-cart-qty.php?q="+qty9+"&pId="+pId1,true);
                                        //     xmlhttp.send();
										// }
										// ?c1="+value1 +"&c2="+value2 +"&c3="+value3
										// + '?p1=' + param1 + '&p2=' + param2
										// u=http://www.foobar.com/first=12&amp;sec=25&amp;position=2
									</script>
									
								</tr>
								<?php
									// }
								}
								?>
								<!-- <tr class="table-body-row">
									<td class="product-remove"><a href="#"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="assets/img/products/product-img-2.jpg" alt=""></td>
									<td class="product-name">Berry</td>
									<td class="product-price">$70</td>
									<td class="product-quantity"><input type="number" placeholder="0"></td>
									<td class="product-total">1</td>
								</tr> -->
								
							</tbody>
						</table>
						
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<?php
								?>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td><i class="fa-sharp fa-solid fa-indian-rupee-sign" ></i><span id='subTotal2'></span></td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td><i class="fa-sharp fa-solid fa-indian-rupee-sign"></i><span id='shipping'></span></td>
								</tr>
								<tr class="total-data">
									<td><strong>Grand Total: </strong></td>
									<td><i class="fa-sharp fa-solid fa-indian-rupee-sign"></i><span id='gTotal'></span></td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							
							<a href="checkout.php?subTotal=" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<h3>Apply Coupon</h3>
						<div class="coupon-form-wrap">
							<form>
								<p><input type="text" placeholder="Coupon"></p>
								<p><input type="submit" value="Apply"></p>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end cart -->

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
	<?php //include 'footer.php' ?>
	<!-- end footer -->
	
	<!-- copyright -->
	<!-- <div class="copyright">
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
	</div> -->
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

		
		var subT=0;
		var ipId=document.getElementsByClassName('ipId');
		var iprice=document.getElementsByClassName('iprice');
		var iquantity =document.getElementsByClassName('iquantity');
		var itotal =document.getElementsByClassName('itotal');
		var subTotal2=document.getElementById('subTotal2');
		var shipping=document.getElementById('shipping');
		var gTotal=document.getElementById('gTotal');
		
	
		function subTotal(qty9){
			subT=0
			for(i=0; i<iprice.length; i++){	
				
				itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
				subT=subT + (iprice[i].value)*(iquantity[i].value);
				shippingValue=parseInt(0.06*subT);
				gTotalValue=subT + shippingValue;

				// var pId1='<?//=$pId1;?>';
				// console.log(pId1);
										 
										// function updateTable(qty9){
											var pId1=ipId[i].value;
											console.log(pId1);
											var xmlhttp = new XMLHttpRequest();
                                            xmlhttp.onreadystatechange = function() {
                                              if (this.readyState == 4 && this.status == 200) {
                                                document.getElementsByClassName("product-quantity1").innerHTML = this.responseText;
                                              }
                                            };
                                            xmlhttp.open("GET","update-cart-qty.php?q="+qty9+"&pId="+pId1,true);
                                            xmlhttp.send();
										// }

			}
			subTotal2.innerText=subT;
			shipping.innerText=shippingValue;
			gTotal.innerText=gTotalValue;
		}

		subTotal();

		
		
	</script>

</body>
</html>

<?php


// if($_SERVER['REQUEST_METHOD'=='POST']){
	// for($j=0;$j<$numRows;$j++){
	// 	if(isset($_POST["modify-qty[$j]"])){
	// 		$modQty=$_POST["modify-qty[$j]"];
	// 		$pId2=$pId[$i];

	// 		$sql="update add_cart set pQty=:modify-qty where pId=:pId";
	// 		$query2=$pdo->prepare($sql);
	// 		$query2->bindParam(':modify-qty',$modQty,$PDO::PARAM_INT);
	// 		$query2->bindParam(':pId',$pId2,$PDO::PARAM_INT);

	// 		$affectedrows=$query2->execute();
	// 		if($affectedrows!=''){
	// 			echo "Data Updated Successfully";
	// 		}
	// 		else{
	// 			echo "Error in updation in data";
	// 		}

	// 	}
	// }

// }

?>



