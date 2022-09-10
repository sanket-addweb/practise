<?php

//connect to database
$conn=mysqli_connect('localhost','root','','crud_simple');

if(!$conn){
    die('unable to connect database');
}
// else{
//     echo 'Connection Done';
// }
?>