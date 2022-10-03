<?php
//connect to db
ob_start();
require 'connection.php';

$imageError=$uNameError=$emailError=$passwordError=$mobileError=$insertionError="";
$uName=$password=$email=$mobile='';

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
// echo "<script>alert('Welcome to Geeks for Geeks')</script>";
  

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty(trim($_POST['uName']))){
    $uNameError="Username Not should be empty";
  }
  else{
    $uName=validData1($_POST['uName']);
    // echo $uName;
    if(!preg_match ("/^[a-zA-z]*$/", $uName)){
      $uNameError="Only alphabets and whitespace are allowed.";
    }
  }

  if(empty(trim($_POST['password']))){
    $passwordError="Password Not should be empty";
  }
  else{
    $password=validData1($_POST['password']);
    // echo $password;
  }

  if(empty($_POST['email'])){
    $emailError="Email Not should be empty";
  }
  else{
    $email=validData1($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
      $emailError = "Invalid email format";  
    }  
    // echo $email;
  }

  if(empty(trim($_POST['mobile']))){
    $mobileError="Phone Not should be empty";
  }
  else{
    $mobile=validData1($_POST['mobile']);
    

    if(!preg_match ("/^[0-9]*$/", $mobile)){
      $mobileError="Only numeric value is allowed";
    }
    if(strlen($mobile) < 10 || strlen($mobile) > 10){
      $mobileError= "Mobile must have 10 digits.";
    }
  }
  
  if (empty($_FILES["filePath"]['name'])) {
    $imageError ="Please select file";
    } 
  else {
    
    $allowed =  array('jpeg','jpg', "png", "gif","JPEG","JPG", "PNG", "GIF");
    $ext = pathinfo($_FILES['filePath']['name'], PATHINFO_EXTENSION);

    if(!in_array($ext,$allowed) ) {
    $imageError ="jpeg, jpg, png, gif allowed only";
    }
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
              <form class="pt-3" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="uname" name="uName" placeholder="Username" required>
                  <span class="text-danger"> <?php  echo $uNameError;//here code tag is red color text display ?>
                  </span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name='password' required>
                  <span class="text-danger"><?php  echo $passwordError; ?></span>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name='email' required>
                  <span class="text-danger"><?php  echo $emailError;?></span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="mobile" name="mobile" placeholder="Phone" required>
                  <span class="text-danger"><?php  echo $mobileError; ?></span>
                </div>
                <div class="form-group">
                  <h5 class='fw-light'>Upload Profile Image</h5> 
                  <!-- <code>.form-check-{color}</code> -->
                  <input type="file" class="form-control form-control-lg" id="file" name="filePath">
                  <span class="text-danger"><?php echo $imageError; ?></span>
                </div>
                <div class="mt-3">
                <span class="text-danger"><?php echo $insertionError; ?></span>
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

if(isset($_POST['signup'])){
  if($imageError=="" && $uNameError=="" && $emailError=="" && $passwordError=="" && $mobileError=="" && $imageError==""){

    // $filePath='img/'.$_FILES['filePath']['name'];
    $filePath='img/'.$_FILES['filePath']['name'];

    move_uploaded_file($_FILES["filePath"]["tmp_name"],$filePath);
    $sql="insert into product_admin (username,email,password,mobile,img_url) values('$uName','$email','$password',$mobile,'$filePath')";
    // echo $sql;
    $result=mysqli_query($conn,$sql) or die("Error in insertion of record or Your account is previosly created");

    if($result){
      echo "<script type='text/javascript'>alert('Success! $uName Your Account is created')</script>";
      echo "<div class='alert alert-success' role='alert'>
          A simple success alert—check it out!
      </div>";
      header("Location:login.php");
    }
  }
}
?>