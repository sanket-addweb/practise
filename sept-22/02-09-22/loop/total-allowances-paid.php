<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>total allowances paid by company</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter number of Employees and find total amount paid by company as allowances</h3>
        Enter Number: <input type="number" name=number>
        <input type="submit" value='click to see'>
    </form>
</body>
</html>

<?php
$numEmp=$_GET['number'];
$code1Allow=200;
$code2Allow=300;
$code3Allow=500;
$totalPerEmp=$code1Allow+$code2Allow+$code3Allow;

$totalAllow=0;

for($i=0;$i<$numEmp;$i++){
    $totalAllow=$totalAllow+$totalPerEmp;
}
echo $totalAllow." is paid by company to its employees as allowances";

?>