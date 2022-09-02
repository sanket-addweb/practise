<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hours, minutes, seconds convert into total second</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Hours, minutes, seconds convert into total second</h3>
        Enter hours: <input type="number" name='hour'>
        Enter minutes: <input type="number" name='minute'>
        Enter seconds: <input type="number" name='second'>
        
        <button>convert Now</button>
    </form>
</body>
</html>

<?php
$hours=$_GET['hour'];
$minutes=$_GET['minute'];
$seconds=$_GET['second'];

$totalSecond=$hours*3600+$minutes*60+$seconds;
echo 'Total second is '.$totalSecond;
?>