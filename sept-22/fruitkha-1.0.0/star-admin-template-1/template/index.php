<?php
ob_start();
include 'connection.php';
session_start();

// if(!isset($_SESSION['uId'])){
//   header('Location:login.php');
// }
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
}

if(isset($_POST['add-catagory'])){
  header('Location:add-cat.php');
}
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
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
  <div class="container-scroller"> 
    <!-- partial:partials/_navbar.html -->
    <?php include 'top-navbar.php';?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
    <?php include 'right-side-nav.php'; ?>
    <!-- page-body-wrapper ends -->
      <!-- container-scroller -->
    <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
          <div class="row">
            <?php 
            $result=mysqli_query($conn,"select * from catlist where is_active='Active'") or die("Error in query of fetch record");
            while($row=mysqli_fetch_array($result)){
              $catName1=$row['categoryName'];
            ?>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">
                    <?php 
                    echo "
                    <a href='product-list-with-add-button.php?catName1=$catName1'><strong style='font-size:25px;' >".$row['categoryName']."</strong></a>";
                    ?>
                  </h4>
                  <?php echo "
                  <a href='product-list-with-add-button.php?catName1=$catName1'><img src=".$row['img_url']." height='200' width='400'></a>"; ?>
                </div>
              </div>
            </div>
            <?php
            }
            ?>
            <!-- <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar chart</h4>
                  <canvas id="barChart"></canvas>
                </div>
              </div>
            </div> -->
          </div>
                            
            <!-- content-wrapper ends -->
          </div>
          <!-- partial:partials/_footer.html -->
          <!-- partial footer end-->
        </div>
        <!-- main-panel ends -->
      </div>
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
      </footer>
  </div>
    <!-- </div> -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="vendors/progressbar.js/progressbar.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

