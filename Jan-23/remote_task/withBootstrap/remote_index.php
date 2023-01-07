<?php 
session_start();
error_reporting(0);
echo "<script> var existSoundNo = existBrightnessNo = 0</script>";
if ($_SESSION['soundNo'] != NULL){                  
    $existSoundNo = $_SESSION['soundNo'];
    // echo "<script> alert($existSoundNo)</script>";//Work fine
    echo "<script> var existSoundNo = $existSoundNo </script>";//Works fine
    // echo $existSoundNo;
}
else{
    echo "<script> var existSoundNo = 0 </script>";
}

if($_SESSION['brightnessNo'] !=NULL){
    $existBrightnessNo = $_SESSION['brightnessNo'] ;
    echo "<script> var existBrightnessNo = $existBrightnessNo</script>";
}
else{
    echo "<script> var existBrightnessNo = 0</script>";
}

if($_SESSION['contrastNo'] !=NULL){
    $existContrastNo = $_SESSION['contrastNo'] ;
    echo "<script> var existContrastNo = $existContrastNo</script>";
}
else{
    echo "<script> var existContrastNo = 0</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Remote button functionality </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <div class = "container-fluid">          
            <div class="container my-5">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header text-center">
                                Remote
                            </div>
                            <!-- <div class='mt-4 mx-auto'> -->
                            <div class='mt-4 mx-3'>
                                <button class="btn btn-secondary" id='sound'>Sound</button>
                                <span class="mx-2" id='soundNo'>0</span>
                                <!-- <p id = 'demo-1'></p> -->
                            </div>
                            <div class='my-2 mx-3'>
                                <button class="btn btn-success" id='brightness'>Brightness</button>
                                <span  class="mx-2" id='brightnessNo'>0</span>
                            </div>
                            <div class='mb-4 mx-3'>
                                <button class="btn btn-info" id='contrast'>Contrast</button>
                                <span  class="mx-2" id='contrastNo'>0</span>
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <script src='script.js'></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>



