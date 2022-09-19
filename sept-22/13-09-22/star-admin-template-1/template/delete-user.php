<?php
ob_start();
include 'connection.php';

$email=$_GET['email1'];

$result1=mysqli_query($conn,"delete from product_admin where email='$email'") or die("Error in deletion of user");

if($result1){
    echo "sucess in deletion of user";
    header("Location:user-list.php");
}

?>