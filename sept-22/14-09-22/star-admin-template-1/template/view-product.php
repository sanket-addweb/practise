<?php

ob_start();
//connect to databse
include 'connection.php';
$catName2=$_GET['catName1'];
$pId=$_GET['pId1'];
$uName=$_GET['uName'];
$profilePath=$_GET['profilePath'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php include 'top-navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php include 'drop-down-nav.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Product of <?php echo $catName2;?> Category</h4>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <?php echo "<a href='add-product.php?catName1=$catName2&profilePath=$profilePath&uName=$uName'><button class='btn btn-primary me-2'>Add Product</button></a> "; ?>
                </div>
              </div>
             </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Under <?php echo $catName2;?> products</h4>
                  <p class="card-description">
                    See All Details of Specific Product
                  </p>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <?php
                      $result3=mysqli_query($conn,"select * from $catName2 where productId=$pId") or die("Error in show record");

                      $srNo=0;
                      while($rows=mysqli_fetch_array($result3)){
                        // $srNo=$srNo+1;
                        // $pId=$rows['productId'];
                      echo " <tbody>";
                        //echo "<tr>";
                          //<!-- <td class="py-1">
                          // <img src="../../images/faces/face1.jpg" alt="image"/>
                          //</td> -->
                          //echo "</tr>";
                          echo "<tr>";
                          echo "<td>Product Id</td> <td>".$pId."</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Product Name</td> <td>".$rows['productName']."</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Product Price</td> <td>".$rows['Price']."</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Dimension</td> <td>".$rows['dimension']."</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Color</td> <td>".$rows['color']."</td>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "</tr>";
                          echo "<tr>";
                          echo "<td>Product Detail</td> <td>".$rows['productDetail']."</td>";
                          echo "</tr>";
                          
                          echo "</tbody>";
                          //echo "<td>Image</td> <td><img src='".$rows['imagePath']."' height='100px' width='100px'></td>";
                          echo "<span></span><img src='".$rows['imagePath']."' height='300px' width='300px'>";
                      }
                      ?>
                    </table>
                    <a href='product-list-with-add-button.php?<?php echo"catName1=".$catName2.'&profilePath='.$profilePath.'&uName='.$uName?>'><button>Back to Product List</button></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
<!-- partial:../../partials/_footer.html -->
<!-- <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
  </div>
</footer> -->
<!-- partial -->
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/js/off-canvas.js"></script>
  <script src="/js/hoverable-collapse.js"></script>
  <script src="/js/template.js"></script>
  <script src="/js/settings.js"></script>
  <script src="/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>