<?php
ob_start();
include 'connection.php';
$catName2=$_GET['catName1'];

$result1=mysqli_query($conn,"select * from catlist where categoryName='$catName2'") or die("Error in fetch record");

while($rows=mysqli_fetch_array($result1)){
    $filePath=$rows['img_url'];
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
                  <h4 class="card-title">Add Category</h4>
                  <p class="card-description">
                    <!-- Basic form elements -->
                  </p>
                  <form class="forms-sample" method='post' enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="exampleInputName1">Product Category</label>
                      <input type="text" class="form-control" id="catName" name='catName' value=<?php echo $catName2; ?> readonly>
                    </div>

                    <div class="form-group">
                      <label>Image upload</label>
                      <div>
                      <input type="file" name='imagePath' value='<?php //echo $filePath; ?>' required>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name='update-cat'>Submit</button>
                  </form>
                  <a href='index.php'><button class="btn btn-light">Cancel</button></a>
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

<?php
$uploaddir='img/';
$filePath1=$uploaddir .basename($_FILES["imagePath"]["name"]);

$result2=mysqli_query($conn,"update catlist set img_url='$filePath1' where categoryName='$catName2'") or die("Error in updating category");
move_uploaded_file($_FILES["imagePath"]["tmp_name"],$filePath1);

if($result2){
    echo 'success in updating';
    header("Location:index.php");
}
?>