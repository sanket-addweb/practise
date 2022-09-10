<?php

include 'connection.php';
$bNo=$_GET['bookNo'];
$result=mysqli_query($conn,"delete from library where bookNo=$bNo") or die("unable to delete record of book");

if($result){
    echo "record of Book delete successfully";
    header('location:welcome-admin.php');
}
?>