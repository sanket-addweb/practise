<?php
ob_start();
include 'connection.php';
$catName2=$_GET['catName1'];

// //check for userId stored in session or not
// if(!isset($_SESSION['uId'])){
//   header('Location:login.php');
// }
session_start();
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
}

$imageError=$insertError='';

$result1=mysqli_query($conn,"select * from catlist where categoryName='$catName2'") or die("Error in fetch record");

while($rows=mysqli_fetch_array($result1)){
    $filePath=$rows['img_url'];
}

if(isset($_POST['update-cat'])){
  if($_FILES['imagePath']['name']!=''){
    $allowed =  array('jpeg','jpg', "png", "gif","JPEG","JPG", "PNG", "GIF");
    $ext = pathinfo($_FILES['imagePath']['name'], PATHINFO_EXTENSION);
  
    if(!in_array($ext,$allowed) ) {
    $imageError ="jpeg, jpg, png, gif allowed only";
    // echo "$imageError";
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
                      <label for="exampleInputName1">Product Category</label>
                      <input type="text" class="form-control" id="catName" name='catName' value=<?php echo $catName2; ?> readonly>
                    </div>
                    <div class='form-group'>
                      
                    </div>
                    <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="is_active" id="optionsRadios1" value="Active" checked>
                              Active
                              <i class="input-helper"></i>
                            </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="radio" class="form-check-input" name="is_active" id="optionsRadios2" value="Inactive" >
                              Inactive
                              <i class="input-helper"></i>
                            </label>
                          </div>                                                 
                    </div>
                    <div class="form-group">
                      <label>Image upload</label>
                      <div>
                      <input type="file" name='imagePath'>
                    </div>
                    <span class='text-danger'><?php echo $imageError;?></span>
                    </div>
                    <button type="submit" class="btn btn-primary me-2" name='update-cat'>Submit</button>
                  </form>
                  <div>
                    <br/>
                    <a href='index.php'><button class="btn btn-primary me-2">Cancel</button></a>
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

<?php

function validData1($data){
  $data=trim($data);
  $data=stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if(isset($_POST['update-cat'])){
    
  $active=$_POST['is_active'];
      
  if($imageError==""){
    $uploaddir='img/';
    $filePath1=$uploaddir .basename($_FILES["imagePath"]["name"]);

    if($_FILES['imagePath']['name']==''){
      $filePath1=$filePath;
    }
    
    move_uploaded_file($_FILES["imagePath"]["tmp_name"],$filePath1);
    $result2=mysqli_query($conn,"update catlist set img_url='$filePath1', is_active='$active' where categoryName='$catName2'");
    
    if($result2){
        header("Location:manage-cat.php");
        echo "<script>successfully inserted category $catName2</script>";
    }
    else{
      echo "Error in updating category";
    }

  }
}

?>