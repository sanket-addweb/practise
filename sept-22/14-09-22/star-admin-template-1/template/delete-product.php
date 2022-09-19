<?php

ob_start();
//connect to databse
include 'connection.php';

$pId=$_GET['pId1'];
$catName1=$_GET['catName1'];
$profilePath=$_GET['profilePath'];
$uName=$_GET['uName'];

$result1=mysqli_query($conn,"delete from $catName1 where productId=$pId") or die("Error in deletion of record");

if($result1){
    header("Location:product-list-with-add-button.php?catName1=$catName1&profilePath=$profilePath&uName=$uName");
}
?>