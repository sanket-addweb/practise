<?php
//connect to database
require 'connection.php';
$rsrNo=$_GET['srNo'];
$result=mysqli_query($conn,"delete from student where sr_no=$rsrNo");

if($result){
    echo "Record Deleted";
    header('location:index.php');
}
else{
    echo "Error in deletion of record";
}
?>