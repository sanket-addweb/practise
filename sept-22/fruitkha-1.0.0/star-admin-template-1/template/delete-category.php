<?php
//connect to db
ob_start();
include 'connection.php';

session_start();
$catName1=$_GET['catName1'];

// //check for userId stored in session or not
// if(!isset($_SESSION['uId'])){
//     header('Location:login.php');
//   }
if(empty($_SESSION['uId']) || $_SESSION['uId'] == ''){
header("Location:login.php");
// die();
}


$result=mysqli_query($conn,"delete from catlist where categoryName='$catName1'") or die("Error in deletion of category");
$result2=mysqli_query($conn,"drop table $catName1");

if($result){
    echo "<script>alert('success in deletion of category $catName1')</script>";
    header('Location:index.php');
}


?>