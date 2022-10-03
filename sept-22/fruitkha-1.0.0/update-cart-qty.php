<?php

ob_start();
include "connection.php";

session_start();
$userId=$_SESSION['userId'];
$mQty=$_GET['q'];
// $userId=$_GET['userId'];
$pId=$_GET['pId'];

echo $mQty;
echo "<br/>";
echo $userId;
echo "<br/>";
echo $pId;
echo "<br/>";
$sql1="update add_cart set pQty=:mQty where pId=:pId and userId=:userId";

$query1=$pdo->prepare($sql1);
$query1->bindParam(':pId',$pId,PDO::PARAM_INT);
$query1->bindParam(':userId',$userId,PDO::PARAM_INT);
$query1->bindParam(':mQty',$mQty,PDO::PARAM_INT);

$affectedrows=$query1->execute();
if($affectedrows!=''){
    echo "updated successfully";
}
else{
    echo "Error in updation in data";
}

// $query->bindParam(':productName',$pName,PDO::PARAM_STR);
//         $query->bindParam(':Price',$pPrice, PDO::PARAM_INT);

//         $affectedrows=$query->execute();
//         if($affectedrows!=''){
//             echo "data updated successfully";
//         }
//         else{
//             echo "Error in updation in data";
//         }


?>