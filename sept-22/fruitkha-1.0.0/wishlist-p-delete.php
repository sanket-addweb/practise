<?php

include 'connection.php';
session_start();
$userId1=$_SESSION['userId'];
$pId1=$_GET['pId1'];

$sql1="delete from wishlist where pId=:pId and userid=:userId";
$query = $pdo -> prepare($sql1);
$query -> bindParam(':pId',$pId1,PDO::PARAM_INT);
$query -> bindParam(':userId',$userId1,PDO::PARAM_INT);

    $affectedrows=$query ->execute();
        if($affectedrows!=0){
            echo "Data Delete Successfully";
            header("Location:wishlist.php");       
        }
        else{
            echo "Error in Deleting";
        }


?>