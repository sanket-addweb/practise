
<?php
ob_start();
//connect to databse
include 'connection.php';

// //check for userId stored in session or not
// if(!isset($_SESSION['uId'])){
//   header('Location:login.php');
// }
session_start();
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
}

$uNameError=$emailError=$passwordError=$mobileError=$imageError="";
$uName=$email=$password=$mobile="";

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

if(isset($_POST['add-user'])){

  if(empty(trim($_POST['uName']))){
    $uNameError="Username Not should be empty";
  }
  else{
    $uName=validData1($_POST['uName']);
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

  if($_FILES['filePath']['name']!=""){
    
    $allowed =  array('jpeg','jpg', "png", "gif","JPEG","JPG", "PNG", "GIF");
    $ext = pathinfo($_FILES['filePath']['name'], PATHINFO_EXTENSION);

    if(!in_array($ext,$allowed) ) {
    $imageError ="jpeg, jpg, png, gif allowed only";
    }
  }

  // $email=$_POST['email'];
  // $password=$_POST['password'];
  // $mobile=$_POST['mobile'];

  if($uNameError=="" && $emailError=="" && $passwordError=="" && $mobileError=="" && $imageError==""){

    $filePath='img/'.$_FILES['filePath']['name'];
    
    $sql1="insert into product_admin (username,email,password,mobile,img_url) values('$uName','$email','$password',$mobile,'$filePath')";
    
    move_uploaded_file($_FILES['filePath']['tmp_name'],$filePath);
  
    $result=mysqli_query($conn,$sql1);
    if($result){
      echo "success in updating user record";
      header("Location:user-list.php");
    }
    else{
      echo "Error in adding of user record";
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
    <!-- partial:../../partials/_navbar.html -->
    <?php include 'top-navbar.php'; ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <?php include 'right-side-nav.php'; ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-11 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add User</h4>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="pName" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="uName" name='uName' required>
                        <span class="text-danger"> <?php  echo $uNameError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pPrice" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name='email' required>
                        <span class="text-danger"> <?php  echo $emailError; ?></span>
                  </span>
                    </div>
                    <div class="form-group">
                        <label for="pDimension" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name='password' required>
                        <span class="text-danger"> <?php  echo $passwordError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name='mobile' required>
                        <span class="text-danger"> <?php  echo $mobileError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Upload Profile Image</label>
                        <input type="file" class="form-control" id="filePath" name='filePath' required>
                        <span class="text-danger"> <?php  echo $imageError; ?></span>
                        <?php // echo "<img width=30px height=30px src=".$filePath; ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2" name='add-user'>Submit</button>
                  </form>
                  <?php  echo "<a href='user-list.php?'><button class='btn btn-light'>Cancel</button></a>" ?>
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