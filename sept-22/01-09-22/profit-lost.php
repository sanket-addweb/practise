<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profit and loss</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter cost price and selling price to see profit or loss</h3>
        Enter cost price: <input type="number" name='cost'>
        Enter selling price: <input type="number" name='selling'>
        <button>convert Now</button>
    </form>
</body>
</html>
<?php
$cost=$_GET['cost'];
$selling=$_GET['selling'];
  if($cost>$selling){
    $loss=$cost-$selling;
    echo 'Here loss occurs '.$loss;
  }
  elseif($cost<$selling){
    $profit=$selling-$cost;
    echo 'Here Profit occurs '.$profit;
  }
  else{
    echo 'There will no profit and no loss';
  }
?>