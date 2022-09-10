<?php

//insert connection confinguration file
require 'connection.php';

if(isset($_REQUEST['insertBtn'])){

    $srNo=$_REQUEST['srNo'];
    $name=$_REQUEST['name'];
    $city=$_REQUEST['city'];
    $std=$_REQUEST['std'];
    $sql="insert into `student` (`sr_no`,`name`,`city`,std) values('$srNo','$name','$city','$std')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo 'Record Inserted successfully';
    }
    else{
        echo 'Error in insertion of record';
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page with insert record and display record</title>
</head>
<body>
    <h2>Index page with insert record and display record</h2>
    <form  method='post'>
        <h3>Fill student Detail</h3>
        Sr. No: <input type="number" name='srNo'><br/><br/>
        name: <input type="text" name='name'><br/><br/>
        city: <input type="text" name='city'><br/><br/>
        std: <input type="number" name='std'><br/><br/>
        <input type="submit" name='insertBtn' value='Insert record'><br/><br/>
       <!-- <input type="submit" name='selectBtn' value='See Record'></input> -->


    </form>
</body>
</html>

<?php
// if(isset($_REQUEST['selectBtn'])){
    $result2=mysqli_query($conn,"select * from student") or die('Error in fetch record');
    // $a= mysqli_fetch_array($result2);
    // print_r($a);
    echo "<table border=3>
    <tr>
    <td>Record sn</td> <td>SrNo</td> <td>Name</td> <td>City</td> <td>Std</td> <td>Edit</td> <td>Delete</td>
    </tr>";
    $no=0;
    while($row=mysqli_fetch_array($result2)){
                $sr_no=$row['sr_no'];
                $no+=1;
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$sr_no."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['city']."</td>";
                echo "<td>".$row['std']."</td>";
                echo "<td><a href=update-record.php?srNo=$sr_no>Edit</a></td>";
                echo "<td><a href=delete-record.php?srNo=$sr_no>Delete</a></td>";
    
                echo "<tr>";
            }
    
    echo "</table>";
// }

?>