<?php

setcookie('name','Sanket',time()+3600,'/','',0);
setcookie('age','22',time()+3600,'/','',0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookies</title>
</head>
<body>
    <?php
    if(isset($_COOKIE['name']) && isset($_COOKIE['age'])){
        echo 'cokkies stored successfully and stored name is '.$_COOKIE['name'].' and age '.$_COOKIE['age'];
    }
    else{
        echo 'Cookies not stored';
    }

    ?>
</body>
</html>

<?php
// destroy cookies
// setcookie('name','',time()+120,'/','',0);
// setcookie('age','',time()+120,'/','',0);


?>