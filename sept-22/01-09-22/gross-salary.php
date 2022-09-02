<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Gross salary</title>
</head>
<body>
    <form action="" method='get'>
        <h3>Enter Basic salary and calculate graoss salary</h3>
        Enter basic salary: <input type="number" name='basicSalary'>
        <button>convert Now</button>
    </form>
</body>
</html>

<?php
$basic=$_GET['basicSalary'];
$grossSalary=$basic+0.40*$basic+0.20*$basic;
echo 'Gross Salary is '.$grossSalary;

?>