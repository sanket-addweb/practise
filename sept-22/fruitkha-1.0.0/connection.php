<?php

ob_start();

// $conn=mysqli_connect('localhost','root','','product_manage') or die("Error in connecting database");

try{
    $pdo=new PDO("mysql:host=localhost;dbname=product_manage",'root','');
    // $pdo = new PDO("mysql:host=localhost;dbname=Batch07", "root", "");
}
catch(PDOException $e){
    die("Fail to connect with db ".$e->getMessage());
}
?>