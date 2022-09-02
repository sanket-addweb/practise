<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>total second into hours, minutes, seconds</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Convert Total  number of second into hours, minutes and second</h3>
        Enter Total Seconds: <input type="number" name='totalSecond1'>
        <button>convert Now</button>
    </form>
</body>
</html>

<?php
$totalSecond=$_GET['totalSecond1'];
$hours=round($totalSecond/3600);
$remainSecond1=$totalSecond%3600;
$minutes=round($remainSecond1/60);
$remainSecond2=$remainSecond1%60;
$seconds=$remainSecond2;

echo $totalSecond.' is converted into hours:minutes:seconds '.$hours.":".$minutes.":".$seconds;
?>