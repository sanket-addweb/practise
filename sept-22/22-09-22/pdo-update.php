<html>
<head>
<title>PHP CURD Operation using PDO Extension  </title>
</head>
<body>
<h3>Update Record | PHP CRUD Operations using PDO Extension</h3>
<form name="insertrecord" method="post">
Product Id: <input type="text" name="pId" required><br/>
Product Name:<input type="text" name="pName" required><br/>
Price:<input type="text" name="pPrice" required><br/>

<input type="submit" name="Update" value="Submit"><br/>
</form>
</body>
</html>

<?php
if(isset($_POST['Update']))
{
	$pId=$_POST['pId'];
	$pName=$_POST['pName'];
	$pPrice=$_POST['pPrice'];

    try{
        $pdo=new PDO("mysql:host=localhost;dbname=product_manage","root","");
        $sql= "UPDATE Clothes SET productName=:productName,Price=:Price where productId=:pId";

        $query=$pdo-> prepare($sql);
        $query->bindParam(':pId',$pId, PDO::PARAM_INT);
        $query->bindParam(':productName',$pName,PDO::PARAM_STR);
        $query->bindParam(':Price',$pPrice, PDO::PARAM_INT);

        $affectedrows=$query->execute();
        if($affectedrows!=''){
            echo "data updated successfully";
        }
        else{
            echo "Error in updation in data";
        }
    }
    catch(PDOException $e){
        die("Error in upadting ". $e->getMessage());
    }

}
?>