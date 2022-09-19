<?php
$errorInsert=false;
$errorCreatT=false;
ob_start();
//connect to databse
include 'connection.php';
$catName2=$_GET['catName1'];

if(isset($_POST['add-product'])){

    // create table
    $sql1="create table `$catName2` (
        productId bigint(10) primary key, productName varchar(49), Price bigint(10), dimension varchar(80), color varchar(20), productDetail text(300)
        )";

    $result1=mysqli_query($conn,$sql1);
    if($result1){
        echo "<script>alert('Table of $catName2 is created')</script>";
    }
    else{
        $errorCreatT=true;
        // echo "<script>alert('Error in create table $catName2')<script>";
    }

    $pId=$_POST['pId'];
    $pName=$_POST['pName'];
    $pPrice=$_POST['pPrice'];
    $pColor=$_POST['pColor'];
    $pDimension=$_POST['pDimension'];
    $pDetail=$_POST['pDetail'];

    // insert record
    $result2=mysqli_query($conn,"insert into $catName2 values($pId,'$pName',$pPrice,'$pDimension','$pColor','$pDetail')");
    
    if($result2){
        header("Location:product-list-with-add-button.php?catName1=$catName2");
        // header("Location:index.php");
        echo "<script>successfully inserted category $catName2</script>";
    }
    else{
        die("Error in insertion of category or your category is previously added, please check");
        $errorInsert=true;
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
      <?php include 'drop-down-nav.php'; ?>
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
                  <form class="forms-sample" method='post'>
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
                    </div>
                    <div class="form-group">
                        <label for="pPrice" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="pPrice" name='pPrice' required>
                    </div>
                    <div class="form-group">
                        <label for="pDimension" class="form-label">Product Dimension</label>
                        <input type="text" class="form-control" id="pDimension" name='pDimension' required>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Product Color</label>
                        <input type="text" class="form-control" id="pColor" name='pColor' required>
                    </div>
                    
                    <div class="form-group">
                        <label for="pName" class="form-label">Product Detail</label>
                        <textarea name="pDetail" calss='form-control' id="" cols="70" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name='add-product'>Submit</button>
                  </form>
                  <?php echo "<a href='product-list-with-add-button.php?catName1=$catName2'><button class='btn btn-light'>Cancel</button></a>" ?>
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
