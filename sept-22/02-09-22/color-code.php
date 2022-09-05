<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>color code</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter character and find color for that character</h3>
        <h3>Enter 'G' or 'g' for green and 'W' or 'w' for white</h3>
        Enter character:<input type="text" name='character' maxlength=1>
        <input type="submit" value="submit" name='sub'>
    </form>
</body>
</html>

<?php
$ch=$_GET['character'];

if($ch=='w' or $ch=='W'){
    echo 'Color is white';
}
elseif($ch=='g' or $ch=='G'){
    echo 'Color is green';
}
else{
    echo 'Enter valid input';
}



?>