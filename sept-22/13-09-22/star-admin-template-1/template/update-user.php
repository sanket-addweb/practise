<?php
ob_start();
include 'connection.php';
$email=$_GET['email1'];
$result1=mysqli_query($conn,"select * from product_admin where email='$email'") or die("Error in fetching record");

while($rows=mysqli_fetch_array($result1)){
    $uName=$rows['username'];
    $password=$rows['password'];
    $mobile=$rows['mobile'];
    // $uName=$rows['username'];
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
      <?php include 'drop-down-nav.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-11 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update User</h4>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <form class="forms-sample" method='post'>
                    
                    <div class="form-group">
                        <label for="pPrice" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name='email'   value='<?php echo $email; ?>' readonly>
                    </div>
                    <div class="form-group">
                        <label for="pName" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="uName" name='uName' value='<?php echo $uName; ?>' required>
                    </div>
                    <div class="form-group">
                        <label for="pDimension" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name='password' value='<?php echo $password; ?>' required>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name='mobile' value='<?php echo $mobile; ?>'required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name='update-user'>Submit</button>
                  </form>
                  <?php echo "<a href='user-list.php?'><button class='btn btn-light'>Cancel</button></a>" ?>
                </div>
              </div>
             </div>
          </div>
          <div class="col-lg-12 grid-margin stretch-card">
              <!-- <div class="card">
                <div class="card-body">
                  
                  
                </div>
              </div> -->
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


<?php

if(isset($_POST['update-user'])){
  $uName2=$_POST['uName'];
  $password2=$_POST['password'];
  $mobile2=$_POST['mobile'];
  $result2=mysqli_query($conn,"update product_admin set username='$uName2', password='$password2', mobile=$mobile2 where email='$email'") or die("Error in updating of user record");
  if($result2){
    echo "success in updating user record";
    header("Location:user-list.php");
  }

}


?>
