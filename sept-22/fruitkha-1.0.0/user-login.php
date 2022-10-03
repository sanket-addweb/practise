<?php
//connect to db
$loginSuccess=false;
ob_start();
require 'connection.php';
$loginError=$emailError=$passwordError="";
$email=$password='';

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if($_SERVER['REQUEST_METHOD']=='POST'){
  if(empty(trim($_POST['email']))){
    $emailError="Email should not empty, Please enter Email";
  }
  else{
    $email=validData1($_POST['email']);
  }

  if(empty(trim($_POST['password']))){
    $passwordError="Password should not empty, please enter Password";
  }
}


if(isset($_POST['login'])){
  $password=validData1($_POST['password']);

  $sql="select * from product_user where email=:email and password=:password";

  $query1=$pdo->prepare($sql);
  $query1 -> bindParam(':email',$email,PDO::PARAM_STR);
  $query1 -> bindParam(':password',$password,PDO::PARAM_STR);
  $query1 -> execute();
  $query1 -> setFetchMode(PDO::FETCH_ASSOC);

  $numRow=$query1->rowCount();
  if($numRow==1){
    while($rows= $query1-> fetch()){
      session_start();
      $userId1=$rows['userId'];
      $_SESSION['userId']=$userId1;
      header("Location:index_2.php");
      // $loginSuccess=true;
      echo "<script>alert('Login successully')</script>";
    }
  }
  else{
    $loginError="Incorrect email and password";
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
  <link rel="stylesheet" href="star-admin-template-1/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="star-admin-template-1/template/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="star-admin-template-1/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="star-admin-template-1/template/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="star-admin-template-1/template/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="star-admin-template-1/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="star-admin-template-1/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="star-admin-template-1/template/images/favicon.png" />
</head>

<body>
   
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="star-admin-template-1/template/images/logo.svg" alt="logo">
              </div>
              <?php
              if($loginSuccess){
               echo "<script>alert('Login successully')</script>";
              }?>
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Login to continue.</h6>
              <form class="pt-3" method='post'>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="email" name='email'>
                  <span class="text-danger"><?php echo $emailError; ?> </span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name='password'>
                  <span class="text-danger"><?php echo $passwordError; ?> </span>
                </div>
                <div class="mt-3">
                 <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"name='login'>LOGIN</button>
                </div>
                <div><span class="text-danger"><?php echo $loginError;?></span></div>
                <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="user-registration.php" class="text-primary">Create Account</a>
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
  <script src="star-admin-template-1/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="star-admin-template-1/template/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="star-admin-template-1/template/js/off-canvas.js"></script>
  <script src="star-admin-template-1/template/js/hoverable-collapse.js"></script>
  <script src="star-admin-template-1/template/js/template.js"></script>
  <script src="star-admin-template-1/template/js/settings.js"></script>
  <script src="star-admin-template-1/template/js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
<?php

?>