<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>total Ruppes into number of 100, 50,20,5,2 notes</title>
</head>
<body>
    <form action="" method='get'>
        <h3>convert total rupees contiain how much notes of 100,50,20,10,5,2</h3>
        Enter Total Rupees: <input type="number" name='totalRupees'>
        <button>convert Now</button>
    </form>
</body>
</html>

<?php
$totalRupees=$_GET['totalRupees'];
$hundred=floor($totalRupees/100);
$remainRupees1=$totalRupees%100;
$fifty=floor($remainRupees1/50);
$remainRupees2=$remainRupees1%50;
$twenty=floor($remainRupees2/20);
$remainRupees3=$remainRupees2%20;
$ten=floor($remainRupees3/10);
$remainRupees4=$remainRupees3%10;
$five=floor($remainRupees4/5);
$remainRupees5=$remainRupees4%5;
$two=floor($remainRupees5/2);

echo $totalRupees.' contain <br/> 100 number notes '.$hundred.'<br/>50 number notes '.$fifty.' <br/>20 number notes '.$twenty.'<br/>10 number notes '.$ten.'<br/>5 number notes '.$five.'<br/> 2 number notes'.$two;







?>