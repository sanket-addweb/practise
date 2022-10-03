<?php
ob_start();
include 'connection.php';

// //check for userId stored in session or not
// if(!isset($_SESSION['uId'])){
//   header('Location:login.php');
// }
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
  header("Location:login.php");
  // die();
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>drop-down navbar</title>
</head>
<body>
    <!-- partial:../../partials/_settings-panel.html -->
    <?php include 'right-side-nav.php'; ?> 
</body>
</html>