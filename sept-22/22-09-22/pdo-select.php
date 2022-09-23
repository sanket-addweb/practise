<?php

try{
    $pdo=new PDO("mysql:host=localhost;dbname=product_manage","root","");
    $sql='SELECT * from Clothes';

    #
    $q=$pdo->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);

    while($rows=$q->fetch()){
        echo $rows['productId']." - ". $rows['productName']." - ". $rows['Price']." - ". $rows['color']."<br/>";
    }

}
catch(PDOException $e){
    die("could not connect to db $e->getMessage()");
}


?>