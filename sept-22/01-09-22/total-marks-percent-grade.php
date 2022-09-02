<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find percertage, Grade </title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter marks of three subject </h3>
        Enter sub1 marks: <input type="number" name='sub1'>
        Enter sub2 marks: <input type="number" name='sub2'>
        Enter sub3 marks: <input type="number" name='sub3'>
        <button>Find now</button>
    </form>
</body>
</html>

<?php
$sub1=$_GET['sub1'];
$sub2=$_GET['sub2'];
$sub3=$_GET['sub3'];

$total=$sub1+$sub2+$sub3;
$per=round($total/3);

echo 'The total marks is '.$total.' and percetage is '.$per.'<br/>';

if($per>=75){
    echo 'You got Grade A';
}
elseif($per<75 and $per>=60){
    echo 'You got Grade B';
}
elseif($per<60 and $per>=45){
    echo 'You got Grade C';
}
elseif($per<45 and $per>=35){
    echo 'You got Grade D';
}
else{
    echo '<br/>Sorry, You are not pass in this Exam';
}

?>