<?php
//connect to db
ob_start();
include 'connection.php';
session_start();
$catName1=$_GET['catName1'];

$result=mysqli_query($conn,"delete from catlist where categoryName='$catName1'") or die("Error in deletion of category");

if($result){
    echo "<script>alert('success in deletion of category $catName1')</script>";
    header('Location:index.php');
}


?>