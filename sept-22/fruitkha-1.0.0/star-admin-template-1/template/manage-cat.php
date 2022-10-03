<?php
ob_start();
include 'connection.php';

//check for userId stored in session or not
// if(!isset($_SESSION['uId'])){
//   header('Location:login.php');
// }
session_start();
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
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
      <?php include 'right-side-nav.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <?php echo "<a href='add-cat.php'><button class='btn btn-primary me-2'>Add Category</button></a> "; ?>
                </div>
              </div>
             </div>
          </div>
          <div class="col-lg-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">List of Category</h4>
                  <!-- <p class="card-description">
                    Add class <code>.table-striped</code>
                  </p> -->
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <!-- <th>
                            Product Image
                          </th> -->
                          <th>
                            SrNo
                          </th>                         
                          <th>
                            Category Image
                          </th>
                          <th>
                            Category Name
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Activate
                          </th>
                          <th>
                            Edit
                          </th>
                          <!-- <th>
                            Delete
                          </th> -->
                        </tr>
                      </thead>
                      <?php
                      $result3=mysqli_query($conn,"select * from catlist") or die("Error in query of fetch record");

                      $srNo=0;
                      while($rows=mysqli_fetch_array($result3)){
                        $srNo=$srNo+1;
                        // $email2=$rows['email'];
                        $catName1=$rows['categoryName'];
                      echo " <tbody>";
                        echo "<tr>";
                          //<!-- <td class="py-1">
                          // <img src="../../images/faces/face1.jpg" alt="image"/>
                          //</td> -->
                          echo "<td>".$srNo."</td>";
                          echo "<td><img src=".$rows['img_url']."></td>";
                          echo "<td>".$rows['categoryName']."</td>";
                          echo "<td>".$rows['is_active']."</td>";
                          if($rows['is_active']=='Inactive'){
                            echo "<td><a href='activate-cat.php?catName1=$catName1'>Activate</a></td>";
                          }
                          else{
                            echo "<td><a href='deactivate-cat.php?catName1=$catName1'>Deactivate</a></td>";
                          }
                          echo "<td><a href='update-category.php?catName1=$catName1'>Edit</a></td>";
                          // echo "<td><a href='delete-category.php?catName1=$catName1'>Delete</a></td>";
                        echo "</tr>";
                      echo "</tbody>";
                      }
                      ?>
                    </table>
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
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
  </div>
</footer>
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