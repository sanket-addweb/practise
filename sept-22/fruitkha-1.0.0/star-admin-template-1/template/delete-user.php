<?php
ob_start();
include 'connection.php';

$email=$_GET['email2'];

// //check for userId stored in session or not
// if(!isset($_SESSION['uId'])){
//     header('Location:login.php');
//   }
session_start();
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
}

$result1=mysqli_query($conn,"delete from product_admin where email='$email'") or die("Error in deletion of user");

if($result1){
    echo "sucess in deletion of user";
    header("Location:user-list.php");
}

?>