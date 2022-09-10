<?php
//connect to database
include 'connection.php';
$sNo=$_GET['srNo'];
$result=mysqli_query($conn,"select * from student where `sr_no`=$sNo") or die("Error in query");
while($row=mysqli_fetch_array($result)){
    $rsrNo=$row['sr_no'];
    $rname=$row['name'];
    $rcity=$row['city'];
    $rstd=$row['std'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update record Page</title>
</head>
<body>
<h2>Update Record Now</h2>
    <form  method='post'>
        Sr. No: <input type="number" name='srNo' value= "<?php echo $rsrNo ?>" disabled><br/><br/>
        name: <input type="text" name='name'  value= "<?php echo $rname ?>"><br/><br/>
        city: <input type="text" name='city' value= "<?php echo $rcity ?>"><br/><br/>
        std: <input type="number" name='std' value= "<?php echo $rstd ?>"><br/><br/>
        <input type="submit" name='updateBtn' value='Update record'><br/><br/>
       <!-- <input type="submit" name='selectBtn' value='See Record'></input> -->


    </form>
</body>
</html>

<?php
$srNo=$rsrNo;
$name=$_POST['name'];
$city=$_POST['city'];
$std=$_POST['std'];
if(isset($_REQUEST['updateBtn'])){
    $result=mysqli_query($conn,"update student set name='$name', city='$city',std=$std where sr_no=$srNo");

    if($result){
        echo "Record Updated successfully";
        header('location:index.php');
    }
    else{
        echo "Error in Update record";
    }
}

?>
