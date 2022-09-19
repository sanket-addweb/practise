<?php
//connect to db
$loginSuccess=false;
ob_start();
require 'connection.php';

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if(isset($_POST['login'])){
  $email=validData1($_POST['email']);
  $password=validData1($_POST['password']);
  $result=mysqli_query($conn,"select * from product_admin where email='$email' and password='$password'") or die("<script>alert('Incorrect email and password')</script>");

  // $row=mysqli_fetch_array($result);
  // if($row>0){
  //   session_start();
  //   echo "<script>alert('Login successully')</script>";
  //   $_SESSION['email']=$email;
  //   header('Location:template/pages/samples/index.php');
  // }
  // else{
  //   echo "<script>alert('Please Enter correct email and password')</srcipt>";
  //   // header('Location:login.php');
  // }
  $rows=mysqli_fetch_array($result);

  while($rows){
      session_start();
      $_SESSION['email']=$email;
      $uName1=$rows['username'];
      // $_SESSION['profilePath']=$rows['img_url'];
      $profilePath=$rows['img_url'];
      header("Location:index.php?profilePath=$profilePath&uName=$uName1");
      $loginSuccess=true;
      echo "<script>alert('Login successully')</script>";

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
              <?php
              if($loginSuccess){
               echo "<script>alert('Login successully')</script>";
              }?>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Sign in to continue.</h6>
              <form class="pt-3" method='post'>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="email" name='email'>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name='password'>
                </div>
                <div class="mt-3">
                 <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"name='login'>LOGIN</button>
                </div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="signup.php" class="text-primary">Signup Now</a>
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