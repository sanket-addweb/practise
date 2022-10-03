<?php

include 'connection.php';
session_start();

// //check for userId stored in session or not
// if(!isset($_SESSION['uId'])){
//   header('Location:login.php');
// }
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
}

$uIdSuper=$_SESSION['uId'];

$result1=mysqli_query($conn,"select * from product_admin where uId='$uIdSuper'"); 
$rows=mysqli_fetch_array($result1);
$uNameSuper=$rows['username'];
$profilePath=$rows['img_url'];
$uEmailSuper=$rows['email'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top-nav</title>
</head>
<body>
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href='index.php'>
            <img src="images/logo.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href='index.php'>
            <img src="images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top"> 
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
            <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold"><?php echo $uNameSuper; ?></span></h1>
            <h3 class="welcome-sub-text">You can do anything because you are admin</h3>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown d-none d-lg-block">
            <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
              <!-- <a class="dropdown-item py-3" >
                <p class="mb-0 font-weight-medium float-left">Select category</p>
              </a> -->
              <div class="dropdown-divider"></div>
              
              <?php // echo "
               $result2=mysqli_query($conn,"select categoryName from catlist where is_active='Active'") or die("Error in fetching data");

               while($rows2=mysqli_fetch_array($result2)){
                $catName4=$rows2['categoryName'];
               
               echo " <a class='dropdown-item preview-item' href='product-list-with-add-button.php?catName1=$catName4'> ";
                ?>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark"><?php echo $catName4; ?></p>
                  <!-- <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p> -->
                </div>
              </a>
              <?php 
               }
              ?>
              
            </div>
          </li>
          <li class="nav-item">
            <form class="search-form" action="#">
              <i class="icon-search"></i>
              <input type="search" class="form-control" placeholder="Search Here" title="Search here">
            </form>
          </li>
          
          <li class="nav-item dropdown d-none d-lg-block user-dropdown">
            <a class="nav-link" id="UserDropdown" href='profile-desplay.php<?php echo "email1=".$uEmailSuper?>' data-bs-toggle="dropdown" aria-expanded="false">
             <?php echo " <img class='img-sm rounded-10 ' src='$profilePath' alt='Profile image' > </a> ";?>

            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">

              <div class="dropdown-header text-center"><a href='profile-desplay.php'>
                <?php echo " <img class='round-img img-sm rounded-10' src='$profilePath' alt='Profile image' height=30 width=30 style='border-radius=40px;'> </a> ";?></a>
                <a href='profile-desplay.php'> <p class="mb-1 mt-3 font-weight-semibold style='font-size:20px;'"><?php echo $uNameSuper; ?></p></a>
                <p class="fw-light text-muted mb-0"><?php echo $uEmailSuper;?></p>
              </div>

              <?php
              echo "
              <a class='dropdown-item' href='profile-desplay.php'><i class='dropdown-item-icon mdi mdi-account-outline text-primary me-2'></i> My Profile <span class='badge badge-pill badge-danger'>1</span></a>";
              ?>

              <a class="dropdown-item" href='signup90.php'><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Signup</a>

              <!-- <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
              <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a> -->
              <a class='dropdown-item' href='logout.php'><i class='dropdown-item-icon mdi mdi-power text-primary me-2'></i>Sign Out</a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
</body>
</html>