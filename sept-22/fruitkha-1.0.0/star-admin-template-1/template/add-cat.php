<?php
$errorFetch=false;
ob_start();
//connect to databse
include 'connection.php';

// if(!isset($_SESSION['uId'])){
//   header('Location:login.php');
// }
session_start();
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
}

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

$catNameError=$imageError=$insertError="";
$catName="";
if(isset($_POST['add-cat'])){

  if(empty(trim($_POST['catName']))){
    $catNameError="Category Name should not be empty";
  }
  else{
    $catName=validData1($_POST['catName']);
    if(!preg_match ("/^[a-zA-z]*$/", $catName)){
      $catNameError="Only alphabets and whitespace are allowed.";
    }
  }
  if(empty(trim($_FILES["imagePath"]['name']))){
    $imageError="Please select image file";
  }
  else{
       $allowed =  array('jpeg','jpg', "png", "gif","JPEG","JPG", "PNG", "GIF");
       $ext = pathinfo($_FILES['imagePath']['name'], PATHINFO_EXTENSION);
   
       if(!in_array($ext,$allowed) ) {
       $imageError ="jpeg, jpg, png, gif allowed only";
       }
  }
      
  if($catNameError=="" && $imageError==""){
    $uploaddir='img/';
    $filePath=$uploaddir .basename($_FILES["imagePath"]["name"]);
    $ext = pathinfo($_FILES['imagePath']['name'], PATHINFO_EXTENSION);
        
    
        // $filePath='image/'.$_FILES['filePath']['name'];
        // $ext=$_FILES['filePath']['type'];
        // echo $ext;
        $currentDt=date("Y-m-d");
        $currentTime=date('h:i:s');
        // echo $currentDt;
        $abc=$catName.$currentDt.'-'.$currentTime.'.'.$ext;
        $filePath1=str_replace($_FILES['imagePath']['name'],$abc,$filePath);
        // move_uploaded_file($_FILES['imagePath']['tmp_name'],$filePath1);
    
        // $sql="insert into catlist (categoryName,img_url,is_active) value('$name','$filePath1','active')";
        // $result=mysqli_query($conn,$sql) or die("Error in query");
    


    move_uploaded_file($_FILES["imagePath"]["tmp_name"],$filePath1);
    $sql="insert into catlist (categoryName,is_active,img_url) values('$catName','Active','$filePath1')";
    
    $result1=mysqli_query($conn,$sql);
    
    if($result1){
        header("Location:index.php");
        echo "<script>successfully inserted category $catName</script>";
    }
    else{
        // die("Error in insertion of category or your category is previously added, please check");
        $insertError="Your category is previously added, please check";
    }

    // create table
    $sql2="create table `$catName` (
      productId bigint(10) AUTO_INCREMENT , productName varchar(49), Price bigint(10), dimension varchar(80), color varchar(20),highlight varchar(900),service varchar(900),specification varchar(900), productDetail varchar(900), imagePath varchar(100), primary key(productId)
    );";

    $result2=mysqli_query($conn,$sql2);
    if($result2){
        echo "<script>alert('Table of $catName is created')</script>";
    }
    else{
        $errorCreateT=true;
        // echo "<script>alert('Error in create table $catName2')<script>";
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
                  <h4 class="card-title">Add Category</h4>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Category </label>
                      <span class=" text-danger">*</span>
                      <input type="text" class="form-control" id="catName" name='catName' placeholder="Product category">
                      <span class="text-danger"><?php echo $catNameError;?></span>
                    </div>

                    <div class="form-group">
                      <label>Image upload</label>
                      <span class=" text-danger">*</span>
                      <div>
                      <input type="file" name='imagePath' required>
                      </div>
                      <span class="text-danger"><?php echo $imageError;?></span>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name='add-cat'>Submit</button>
                    <span class="text-danger"><?php echo $insertError;?></span>
                  </form>
                  <div>
                    <br/>
                  <?php echo "<a href='index.php?'><button class='btn btn-primary me-2'>Cancel</button></a>"?>
                  </div>
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