<?php
ob_start();
//connect to databse
include 'connection.php';
$catName2=$_GET['catName1'];
$pId=$_GET['pId1'];

$result1=mysqli_query($conn,"select * from $catName2 where productId=$pId");

while($rows=mysqli_fetch_array($result1)){
    // $pId=$rows['productId'];
    $pName=$rows['productName'];
    $price=$rows['Price'];
    $dimension=$rows['dimension'];
    $color=$rows['color'];
    $pDetail=$rows['productDetail'];
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
                        <input type="number" class="form-control" id="pId" aria-describedby="" name='pId' value='<?php echo $pId; ?>' readonly>
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
                        <input type="text" class="form-control" id="pName" name='pName'     value='<?php echo $pName; ?>' required>
                    </div>
                    <div class="form-group">
                        <label for="pPrice" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="pPrice" name='pPrice'  value='<?php echo $price; ?>'required>
                    </div>
                    <div class="form-group">
                        <label for="pDimension" class="form-label">Product Dimension</label>
                        <input type="text" class="form-control" id="pDimension" name='pDimension'value='<?php echo $dimension; ?>' required>
                    </div>
                    <div class="form-group">
                        <label for="pColor" class="form-label">Product Color</label>
                        <input type="text" class="form-control" id="pColor" name='pColor' value='<?php echo $color; ?>'required>
                    </div>
                    
                    <div class="form-group">
                        <label for="pName" class="form-label">Product Detail</label>
                        <input type='text' class="form-control" name="pDetail" calss='form-control' id="" cols="70" rows="4" value='<?php echo $pDetail; ?>'></input>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name='update-product'>Submit</button>
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

<?php

if(isset($_POST['update-product'])){

    $pName2=$_POST['pName'];
    $price2=$_POST['pPrice'];
    $dimension2=$_POST['pDimension'];
    $color2=$_POST['pColor'];
    $pDetail2=$_POST['pDetail'];
    $result2=mysqli_query($conn,"update $catName2 set productName='$pName2', Price=$price2, dimension='$dimension2', color='$color2', productDetail='$pDetail2' ") or die("Error in updating record");

    if($result2){
        echo "success in updating record";
        header("Location:product-list-with-add-button.php?catName1=$catName2");
    }
}

?>