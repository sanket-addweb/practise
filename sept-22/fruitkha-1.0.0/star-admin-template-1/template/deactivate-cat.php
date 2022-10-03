<?php
ob_start();
include 'connection.php';
$catName1=$_GET['catName1'];

$result1=mysqli_query($conn,"update catlist set is_active='Inactive' where categoryName='$catName1'") or die ("Error in query");

if($result1){
    header("Location:manage-cat.php");
}
?>