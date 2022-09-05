<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>series-5</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter Any number you want to print series up to that number</h3>
        Enter Number: <input type="number" name=number>
        <input type="submit" value='click to see'>
    </form>
</body>
</html>


<?php
$num=$_GET['number'];
$i=1;
while($i<=$num){
    if($i%2!=0){
        echo '1, '; 
    }
    else{
        echo '0, ';
    }
    $i++;
}


?>