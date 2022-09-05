<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digit saperate from number</title>
</head>
<body>
    <form action="" method='get'>
        <h1>Enter A number you want to seperate its digit</h1>
        Enter number: <input type="number" id="number" name='number'>
        <input type='submit' name='btn'></input>
    </form>

</body>
</html>

<?php
$num=$_GET['number'];

while($num!=0){
    $r=$num%10;
    echo $r.', ';
    $num=floor($num/10);
}

?>