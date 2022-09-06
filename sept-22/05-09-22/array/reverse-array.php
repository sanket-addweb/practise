<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse array</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter Element of array you want to reverse it</h3>
        Enter Element1: <input type="text" name=value1>
        Enter Element2: <input type="text" name=value2>
        Enter Element3: <input type="text" name=value3>
        Enter Element4: <input type="text" name=value4>
        Enter Element5: <input type="text" name=value5>
        Enter Element6: <input type="text" name=value6>

        <input type="submit" name='sum' value='Submit'>
    </form>
</body>
</html>

<?php
$arr[0]=$_GET['value1'];
$arr[1]=$_GET['value2'];
$arr[2]=$_GET['value3'];
$arr[3]=$_GET['value4'];
$arr[4]=$_GET['value5'];
$arr[5]=$_GET['value6'];

//before reverse
foreach($arr as $arrValues){
    echo $arrValues.', ';
}


//now reverse it
echo '<br/>After reverse';
for($i=count($arr);$i>=0;$i--){
    echo $arr[$i].", ";
}






?>