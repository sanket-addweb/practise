<?php
//connect to db
ob_start();
require '/opt/lampp/htdocs/php-programme/star-admin2-free-admin-template-1.0.0/template/connection.php';

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if(isset($_POST['signup'])){
  $uName=validData1($_POST['uName']);
  $password=validData1($_POST['password']);
  $email=validData1($_POST['email']);
  $mobile=validData1($_POST['mobile']);
  $filePath='img/'.$_FILES['filePath']['name'];

  $result=mysqli_query($conn,"insert into product_admin (username,email,password,mobile,img_url) values('$uName','$email','$password',$mobile,'$filePath')") or die("Error in insertion of record or Your account is previosly created");
  move_uploaded_file($_FILES["filePath"]["tmp_name"],$filePath);

  if($result){
    echo "<script>alert('Success! $uName Your Account is created')</script>";
    header("Location:login.php");
  }
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
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign Up to continue.</h6>
              <form class="pt-3" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="uname" name="uName" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name='password'>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name='email'>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="mobile" name="mobile" placeholder="Phone">
                </div>
                <div class="form-group">
                  <h5>Upload Profile Image</h5>
                  <input type="file" class="form-control form-control-lg" id="file" name="filePath">
                </div>
                <div class="mt-3">
                 <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"name='signup'>SIGN UP</button>
                </div>
                <div class="text-center mt-4 fw-light">
                  You have an account? <a href="login.php" class="text-primary">Login Now</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
<?php

?>