<?php

try{
    $pdo1=new PDO("mysql:host=localhost;dbname=product_manage","root","");

    $pId=1289;
    $sql1='SELECT * FROM Clothes WHERE productId= :productId';
    // echo $sql;
    $query1=$pdo1 -> prepare($sql1);
    $query1 ->bindParam(':productId', $pId, PDO::PARAM_INT);
    $query1 -> execute();
    $query1 -> setFetchMode(PDO::FETCH_ASSOC);
    while($row1=$query1->fetch()){
        echo $row1['productId']." ".$row1['productName'] ." ". $row1['Price'];
    }
}
catch(PDOException $err){
    die("Could Not coonect to database:" .$err->getMessage());
}

?>
