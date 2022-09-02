<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coin conversation</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter number of 50, 25, 20, 10, 5, 2 paisa coin and convert them into rupees</h3>
        Enter number of 50 paisa coin: <input type="number" name='fiftyPaisa'><br/>
        Enter number of 25 paisa coin: <input type="number" name='twentyfivePaisa'><br/>
        Enter number of 20 paisa coin: <input type="number" name='twentyPaisa'><br/>
        Enter number of 10 paisa coin: <input type="number" name='tenPaisa'><br/>
        Enter number of 5 paisa coin: <input type="number" name='fivePaisa'><br/>
        Enter number of 2 paisa coin: <input type="number" name='twoPaisa'>
        <button>convert Now</button>
    </form>
</body>
</html>

<?php
$numFifty=$_GET['fiftyPaisa'];
$numTwentyFive=$_GET['twentyfivePaisa'];
$numTwenty=$_GET['twentyPaisa'];
$numTen=$_GET['tenPaisa'];
$numFive=$_GET['fivePaisa'];
$numTwo=$_GET['twoPaisa'];

$totalPaisa=$numFifty*50+$numTwentyFive*25+$numTwenty*20+$numTen*10+$numFive*5+$numTwo*2;
$rupees=round($totalPaisa/100);

echo 'The total rupees is '.$rupees;

?>