<?php
ob_start();
include 'connection.php';
session_start();
// $uName=$_SESSION['uName'];
if(!isset($_SESSION['email'])){
  header('Location:login.php');
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
          <?php echo "<a href='add-cat.php'><button class='btn btn-primary me-2'>Add Category</button></a> "; ?>
                <?php
                        $result=mysqli_query($conn,"select * from catlist") or die("Error in query of fetch record");
                        echo "<table>";
                        // echo "<tr> <td></td> </tr>";
                        while($row=mysqli_fetch_array($result)){
                        $catName1=$row['categoryName'];
                        // $_SESSION['catName1']=$catName1;
                        echo "<tr>";
                        echo "<td><a href='product-list-with-add-button.php?catName1=$catName1'><img src=".$row['img_url']." height='200' width='400'></a></td>";
                        echo '</tr>';
                        echo '</table>';
                        echo '<table>';
                        echo "<tr>";
                        echo "<td><a href='product-list-with-add-button.php?catName1=$catName1'><strong style='font-size:25px;' >".$row['categoryName']."</strong></a></td>";
                        //echo "<td><a href='update-category.php?catName1=$catName1'><strong style='font-size:25px;' style='margin-left: 30px;'>Modify</strong></a></td>";
                        echo "<td><a href='delete-category.php?catName1=$catName1'><strong style='font-size:25px;'>&nbsp;Delete</strong></a></td>";
                        echo "</tr>";
                        echo "</table>";
                        
                       }
                   ?>
              
                    
            <!-- content-wrapper ends -->
          </div>
          <!-- partial:partials/_footer.html -->
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
            </div>
          </footer> -->
          <!-- partial footer end-->
        </div>
        <!-- main-panel ends -->
    </div>
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

