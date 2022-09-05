<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing amount</title>
</head>
<body>
    <form action="" method=get>
        <h3>Enter how much unit and find its bill amount</h3>
        Enter Unit:<input type="number" name='unit'>
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php
// error_reporting(0);
$unit=$_GET['unit'];
$fix=100;
if($unit<=50){
    echo 'The billing amount is '.$fix;
}
elseif($unit>50 && $unit<=100){
    $amount=$fix+($unit-50)*1;
    echo 'The billing amount is '.$amount;
}
elseif($unit<100 && $unit>=200){
    $amount=$fix+($unit-50)*1.5;
    echo 'The billing amount is '.$amount; 
}
elseif($unit<200 && $unit>=300){
    $amount=$fix+($unit-50)*2;
    echo 'The billing amount is '.$amount; 
}
elseif($unit<300 && $unit>=400){
    $amount=$fix+($unit-50)*2.5;
    echo 'The billing amount is '.$amount; 
}
else{
    echo 'Please Enter valid input';
}


?>