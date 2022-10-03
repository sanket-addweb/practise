<?php
$errorInsert=false;
$errorCreatT=false;
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

$catName2=$_GET['catName1'];

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

$pIdError=$pNameError=$pPriceError=$pColorError=$pDimensionError=$insertError="";
$pId=$pPrice=$pColor=$pDimension="";

if(isset($_POST['add-product'])){

    if(empty(trim($_POST['pId']))){
      $pIdError="Product Id should not empty";
    }
    else{
      $pId=validData1($_POST['pId']);
      echo $pId;
    }

    if(empty(trim($_POST['pName']))){
      $pNameError="Product name should not be empty";
    }
    else{
      $pName=validData1($_POST['pName']);
      // if(!preg_match ("/^[a-zA-z]*$/", $pName)){
      //   $pNameError="Only alphabets and whitespace are allowed.";
      // }
    }

    if(empty(trim($_POST['pPrice']))){
      $pPriceError="Product Price should not empty";
    }
    else{
      $pPrice=validData1($_POST['pPrice']);
    }
    // $pPrice=$_POST['pPrice'];

    if(empty(trim($_POST['pColor']))){
      $pColorError="Product Color should not empty";
    }
    else{
      $pColor=validData1($_POST['pColor']);
    }
    // $pColor=$_POST['pColor'];

    if(empty(trim($_POST['pDimension']))){
      $pDimensionError="Product Dimension should not empty";
    }
    else{
      $pDimension=validData1($_POST['pDimension']);
    }
    // $pDimension=$_POST['pDimension'];

    
    

    // if(empty(trim($_FILES["filePath"]['name']))){
    //   $imageError="Please select image file";
    // }
    // else{
    //      $allowed =  array('jpeg','jpg', "png", "gif","JPEG","JPG", "PNG", "GIF");
    //      $ext = pathinfo($_FILES['filePath']['name'], PATHINFO_EXTENSION);
     
    //      if(!in_array($ext,$allowed) ) {
    //      $imageError ="jpeg, jpg, png, gif allowed only";
    //      }
    // }

    
    
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
  <script src="nicEdit.js"></script>
  <script>
        bkLib.onDomLoaded(function(){nicEditors.allTextAreas()});
  </script>
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
                  <h4 class="card-title">Add Product of <?php echo $catName2;?></h4>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pId" class="form-label">Product Id</label>
                        <input type="number" class="form-control" id="pId" aria-describedby="" name='pId' required>
                    </div>
                    <?php
                    // if($errorCreatT==true){
                    //     echo "<script>alert('Error in create table $catName2')<script>";
                    // }
                    // if($errorInsert==true){
                    //   echo "your Product is previously added, please check";
                    // }
                    ?>
                    <div class="form-group">
                        <label for="pName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="pName" name='pName' required>
                        <span class="text-danger"><?php echo $pNameError;?></span>
                    </div>
                    <div class="form-group">
                        <label for="pPrice" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="pPrice" name='pPrice' required>
                        <span class="text-danger"><?php echo $pPriceError;?></span>
                    </div>
                    <div class="form-group">
                        <label for="pDimension" class="form-label">Product Dimension</label>
                        <input type="text" class="form-control" id="pDimension" name='pDimension' required>
                        <span class="text-danger"><?php echo $pDimensionError;?></span>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Product Color</label>
                        <input type="text" class="form-control" id="pColor" name='pColor' required>
                        <span class="text-danger"><?php echo $pColorError;?></span>
                    </div>
                    <div class="form-group">
                        <label for="filePath" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="filePath" name='filePath' required>
                        <!-- <span class="text-danger"><?php //echo $imageError;?></span> -->
                    </div>
                    <label for="for-textarea1" class='form-label' >Product highlight</label>
                    <div class="form-floating">
                      <textarea name="highlight" calss='form-control' id="" cols="70" rows="4" required></textarea>
                    </div>
                    <label for="for-textarea2" class="form-label">Service</label>
                    <div class="form-group">
                        <textarea name="service" calss='form-control' id="" cols="70" rows="4" required></textarea>
                    </div>
                    <label for="for-textarea3" class="form-label">Product Specification</label>
                    <div class="form-group">
                        <textarea name="specification" calss='form-control' id="" cols="70" rows="4" required></textarea>
                    </div>
                    <label for="for-textarea4" class="form-label">Product Detail</label>
                    <div class="form-group">
                        <textarea name="pDetail" calss='form-control' id="" cols="70" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name='add-product'>Submit</button>
                    <span class="text-danger"><?php echo $insertError;?></span>
                  </form>
                  <br/>
                  <?php echo "<a href='product-list-with-add-button.php?catName1=$catName2'><button class='btn btn-primary me-2'>Cancel</button></a>" ?>
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

if(isset($_REQUEST['add-product'])){
  // echo "Hi I am sanket";
  // $highlight=$_POST['highlight'];
  // $service=$_POST['service'];
  // $specification=$_POST['specification'];
  // $pDetail=$_POST['pDetail'];

  // if($pIdError=='' && $pNameError=="" && $pPriceError=="" && $pColorError=="" && $pDimensionError==""){
      
  //   $filePath='img/' .basename($_FILES["filePath"]["name"]);
  //   // insert record
  //   $sql2= "insert into $catName2 values($pId,'$pName',$pPrice,'$pDimension','$pColor','$highlight','$service','$specification','$pDetail','$filePath')";
  //   echo "$sql2";
  //   $result2=mysqli_query($conn,$sql2);
  //   move_uploaded_file($_FILES['filePath']['tmp_name'],$filePath);
    
  //   if($result2){
  //       header("Location:product-list-with-add-button.php?catName1=$catName2");
  //       echo "<script>successfully inserted category $catName2</script>";
  //   }
  //   else{
  //       echo ("Error in insertion of product or your product is previously added, please check");
  //       $insertError="Your product is previously added, please check product Id";
  //   }
  // } 
}

?>