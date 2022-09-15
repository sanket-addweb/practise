<?php
ob_start();
$conn=mysqli_connect('localhost:3306','root','','product_manage') or die("Error in connection");

if(!$conn){
    // echo "<script>alert('Error in connection')</script>";
    echo "error in connection set";
    
}
?>