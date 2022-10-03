<?php
//connect to db
ob_start();
require 'connection.php';

$imageError=$fNameError=$lNameError=$emailError=$passwordError=$cPasswordError=$mobileError=$insertionError="";
$fName=$lName=$password=$cPassword=$email=$mobile='';

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
// echo "<script>alert('Welcome to Geeks for Geeks')</script>";
  

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty(trim($_POST['fName']))){
    $fNameError="First name Not should be empty";
  }
  else{
    $fName=validData1($_POST['fName']);
    // echo $uName;
    if(!preg_match ("/^[a-zA-z]*$/", $fName)){
      $fNameError="Only alphabets and whitespace are allowed.";
    }
  }

  if(empty(trim($_POST['lName']))){
    $lNameError="Last name Not should be empty";
  }
  else{
    $lName=validData1($_POST['lName']);
    // echo $uName;
    if(!preg_match ("/^[a-zA-z]*$/", $lName)){
      $lNameError="Only alphabets and whitespace are allowed.";
    }
  }

  if(empty(trim($_POST['password']))){
    $passwordError="Password Not should be empty";
  }
  else{
    $password=validData1($_POST['password']);
    // echo $password;
  }

  if(empty(trim($_POST['cPassword']))){
    $cPasswordError="Confirm Password Not should be empty";
  }
  else{
    $cPassword=validData1($_POST['cPassword']);
    // echo $password;
  }

  if($password!=$cPassword){
    $cPasswordError="Password did not match please check";
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
  
  // if (empty($_FILES["filePath"]['name'])) {
  //   $imageError ="Please select file";
  //   } 
  // else {
    
  //   $allowed =  array('jpeg','jpg', "png", "gif","JPEG","JPG", "PNG", "GIF");
  //   $ext = pathinfo($_FILES['filePath']['name'], PATHINFO_EXTENSION);

  //   if(!in_array($ext,$allowed) ) {
  //   $imageError ="jpeg, jpg, png, gif allowed only";
  //   }
  // }
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Registraion form </title>
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
              <h4>Hello! let's get started</h4>
              <h6 class="fw-light">Register to continue.</h6>
              <form class="pt-3" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="fname" name="fName" placeholder="First name" required>
                  <span class="text-danger"> <?php  echo $fNameError; ?>
                  </span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" id="lname" name="lName" placeholder="Last name" required>
                  <span class="text-danger"> <?php  echo $lNameError; ?>
                  </span>
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
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name='password' required>
                  <span class="text-danger"><?php  echo $passwordError; ?></span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" name='cPassword' required>
                  <span class="text-danger"><?php  echo $cPasswordError; ?></span>
                </div>
                <!-- <div class="form-group">
                  <h5 class='fw-light'>Upload Profile Image</h5> 
                  <input type="file" class="form-control form-control-lg" id="file" name="filePath">
                  <span class="text-danger"><?php //echo $imageError; ?></span>
                </div> -->
                <div class="mt-3">
                <span class="text-danger"><?php echo $insertionError; ?></span>
                 <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"name='register'>Create Account</button>
                </div>
                <div class="text-center mt-4 fw-light">
                  You have an account? <a href="user-login.php" class="text-primary">Login Now</a>
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

if(isset($_POST['register'])){
  if($imageError=="" && $fNameError=="" && $lNameError=="" && $emailError=="" && $passwordError=="" && $cPasswordError=="" && $mobileError==""){

    // $filePath='img/'.$_FILES['filePath']['name'];

    // move_uploaded_file($_FILES["filePath"]["tmp_name"],$filePath);
    $sql="insert into product_user (firstName,lastName,email,password,mobile) values(:fName,:lName,:email,:password,:mobile)";
    // ('$fName','$lName','$email','$password',$mobile)";
    $query = $pdo ->prepare($sql);
    $query -> bindParam(':fName',$fName,PDO::PARAM_STR);
    $query -> bindParam(':lName',$lName,PDO::PARAM_STR);
    $query -> bindParam(':email',$email,PDO::PARAM_STR);
    $query -> bindParam(':password',$password,PDO::PARAM_STR);
    $query -> bindParam(':mobile',$mobile,PDO::PARAM_INT);

    $query -> execute();
    $lastInsertId = $pdo -> lastInsertId();

    if($lastInsertId!=""){
      echo "Your account is successfully created";
      header("Location:user-login.php");
      // echo "<script type='text/javascript'>alert('Success! $uName Your Account is created')</script>";
    }
    else{
      echo "Error in creation of account";
    }

    $query -> setFetchMode(PDO::FETCH_ASSOC);
    
  }
}
?>