<?php

$conn=mysqli_connect('localhost','root','','crud_simple') or die('Error in connection to db');

// if($conn){
//     echo "Database connection successfully";
// }

$sql="create table library (
    bookNo int(10) primary key,bookName varchar(49), bookReader varchar(49), readerMobile int(10))";

$sql2="create table library_user (
    regNo int(10) primary key,Name varchar(49), Mobile int(10))";

$sql3="create table library_admin (
    srNo int(10) primary key auto_increment, Name varchar(49), Mobile int(10))";

// $result=mysqli_query($conn,$sql);
// $result2=mysqli_query($conn,$sql2);
// $result3=mysqli_query($conn,$sql3);
// if($result && $result2 && $result3){
//     echo "table created successfully";
// }
// else{
//     echo "Fail to create table";
// }

?>