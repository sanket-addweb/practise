<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h2>Welcome!</h2>
    <h3>
        <?php
        echo 'Your name is '.$_GET['name'];
        ?>
    </h3>
</body>
</html>