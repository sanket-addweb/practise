<?php
ob_start();
include 'connection.php';
// $uId=$_SESSION['uId'];
// $email1=$_GET['email1'];
$uId11=$_GET['uId10'];

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

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

// $result3=mysqli_query($conn,"select * from product_admin where email='$email1'") or die("Error in fetching record");
 $result3=mysqli_query($conn,"select * from product_admin where uId=$uId11") or die("Error in fetching record");

while($rows=mysqli_fetch_array($result3)){
    // $uId1=$rows['uId'];
    $uId1=$uId11;
    $email1=$rows['email'];
    $uName1=$rows['username'];
    $password1=$rows['password'];
    $mobile1=$rows['mobile'];
    $filePath1=$rows['img_url'];
    // $uName=$rows['username'];
}

if(isset($_POST['update-user'])){
  if(empty(trim($_POST['uName']))){
    $uNameError="Username Not should be empty";
  }
  else{
    $uName2=validData1($_POST['uName']);
    if(!preg_match ("/^[a-zA-z]*$/", $uName)){
      $uNameError="Only alphabets and whitespace are allowed.";
    }
  }
  if(empty(trim($_POST['password']))){
    $passwordError="Password Not should be empty";
  }
  else{
    $password2=validData1($_POST['password']);
    // echo $password;
  }

  if(empty($_POST['email'])){
    $emailError="Email Not should be empty";
  }
  else{
    $email2=validData1($_POST['email']);
    if (!filter_var($email2, FILTER_VALIDATE_EMAIL)) {  
      $emailError = "Invalid email format";  
    }  
    // echo $email;
  }

  if(empty(trim($_POST['mobile']))){
    $mobileError="Phone Not should be empty";
  }
  else{
    $mobile2=validData1($_POST['mobile']);
    

    if(!preg_match ("/^[0-9]*$/", $mobile2)){
      $mobileError="Only numeric value is allowed";
    }
    if(strlen($mobile2) < 10 || strlen($mobile2) > 10){
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
                  <h4 class="card-title">Update User</h4>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pPrice" class="form-label">User Id</label>
                        <input type="number" class="form-control" id="uId" name='uId'   value='<?php echo $uId1; ?>' readonly>
                    </div>
                    <div class="form-group">
                        <label for="pPrice" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name='email'   value='<?php echo $email1; ?>'>
                        <span class="text-danger"> <?php  echo $emailError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pName" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="uName" name='uName' value='<?php echo $uName1; ?>' required>
                        <span class="text-danger"> <?php  echo $uNameError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pDimension" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name='password' value='<?php echo $password1; ?>' required>
                        <span class="text-danger"> <?php  echo $passwordError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="mobile" name='mobile' value='<?php echo $mobile1; ?>'required>
                        <span class="text-danger"> <?php  echo $mobileError; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Upload Profile Image</label>
                        <input type="file" class="form-control" id="filePath" name='filePath'>
                        <span class="text-danger"> <?php  echo $imageError; ?></span>
                        <?php // echo "<img width=30px height=30px src=".$filePath; ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary me-2" name='update-user'>Submit</button>
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


<?php

if(isset($_POST['update-user'])){
  // $email2=$_POST['email'];
  // $uName2=$_POST['uName'];
  // $password2=$_POST['password'];
  // $mobile2=$_POST['mobile'];
  if($uNameError=="" && $emailError=="" && $passwordError=="" && $mobileError=="" && $imageError==""){

    $filePath2='img/'.$_FILES['filePath']['name'];
    if($_FILES['filePath']['name']==""){
      $filePath2=$filePath1;
    }
    
    $sql1="update product_admin set username='$uName2', password='$password2',email='$email2', mobile=$mobile2, img_url='$filePath2' where uId=$uId1";
    
    move_uploaded_file($_FILES['filePath']['tmp_name'],$filePath2);
  
    $result2=mysqli_query($conn,$sql1);
    if($result2){
      echo "success in updating user record";
      header("Location:user-list.php");
    }
    else{
      echo "Error in updating of user record";
    }
  }
}

?>
