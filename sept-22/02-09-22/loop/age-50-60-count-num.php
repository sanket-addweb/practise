<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>count number of person between age 50 to 60</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter 10 numbers of person age and count who is between 50 to 60</h3>
        Enter person-1 age: <input type="number" name='age1' min=0  max=100><br/><br/>
        Enter person-2 age: <input type="number" name='age2' min='0' max='100'><br/><br/>
        Enter person-3 age: <input type="number" name='age3' min='0' max='100'><br/><br/>
        Enter person-4 age: <input type="number" name='age4' min='0' max='100'><br/><br/>
        Enter person-5 age: <input type="number" name='age5' min='0' max='100'><br/><br/>
        Enter person-6 age: <input type="number" name='age6' min='0' max='100'><br/><br/>
        Enter person-7 age: <input type="number" name='age7' min='0' max='100'><br/><br/>
        Enter person-8 age: <input type="number" name='age8' min='0' max='100'><br/><br/>
        Enter person-9 age: <input type="number" name='age9' min='0' max='100'><br/><br/>
        Enter person-10 age: <input type="number" name='age10' min='0' max='100'>
        <input type="submit" name="" id="" value='submit now'>
    </form>
</body>
</html>

<?php
$age1=$_GET['age1'];
$age2=$_GET['age2'];
$age3=$_GET['age3'];
$age4=$_GET['age4'];
$age5=$_GET['age5'];
$age6=$_GET['age6'];
$age7=$_GET['age7'];
$age8=$_GET['age8'];
$age9=$_GET['age9'];
$age10=$_GET['age10'];
$sum =0;

for($i=51;$i<=60;$i++){
    // echo 'hey';
    if($age1==$i or $i==$age2 or $i==$age3 or $i==$age4 or $i==$age5 or $i==$age6 or $i==$age7 or $i==$age8 or $i==$age9 or $i==$age10 ){
        $sum=$sum+1;
    }
}

echo "between 50 to 60 number of person is ".$sum;

?>