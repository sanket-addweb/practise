<?php 
session_start();
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
    </head>
    <body>
        <div>
            <button id='sound'>Sound</button>
            <span id='soundNo'>0</span>
            <!-- <p id = 'demo-1'></p> -->
        </div>
        <div>
            <button id='brightness'>Brightness</button>
            <span id='brightnessNo'>0</span>
        </div>
        <div>
            <button id='contrast'>Contrast</button>
            <span id='contrastNo'>0</span>
        </div>
    

        <!-- Apply onclick button event and increase one value in click and store in ajax url(file) and get from ajax that value and set to that id -->
        <script>
            // document.getElementById('demo-1').innerText = existSoundNo;//works fine
            document.getElementById('soundNo').innerText = existSoundNo;

            $(document).ready(function(){
                $('#sound').click(function(){
                   
                    var soundNo = $("#soundNo").text();
                    console.log(soundNo);
                    // var soundNo = parseInt(soundNo)+1;
                    // $("#soundNo").text("Hello world!");
                    // $("#soundNo").text(soundNo);

                    //Now pass the data to url page on click event and retrive that data on success
                    $.ajax({
                    type: 'POST',
                    url: 'yourphppage.php',
                    dataType: "json",
                    data: {
                        // idofrow:id
                        idofrow:soundNo,
                        'brightnessNoKey' : '',
                        'contrastNoKey' : '',
                        
                    },
                    success: function(data) {
                        console.log(data);
                        //    alert(data);
                        // getId=data;
                        $("#soundNo").text(data);
                        // $('input:text').val(data[0].message);
                    },
                    error: function(data) {
                        // alert(data);
                        console.log(data);
                    
                    }
                    });
                    // console.log(getId);
                })

                //brightness
                document.getElementById('brightnessNo').innerText = existBrightnessNo;
                $('#brightness').click(function(){
                    var brightnessNo = $("#brightnessNo").text();
                    console.log(brightnessNo);
                    // brightnessNo = parseInt(brightnessNo) + 1;
                    $('#brightnessNo').text(brightnessNo);

                    $.ajax({
                        type: 'POST',
                        url: 'yourphppage.php',
                        dataType: "json",
                        data: {
                            // idofrow:id
                            idofrow:'',
                            'brightnessNoKey' : brightnessNo,
                            'contrastNoKey' : '',
                            
                        },
                        success: function(data) {
                            console.log(data);
                            //    alert(data);
                            $("#brightnessNo").text(data);
                            // $('input:text').val(data[0].message);
                        },
                        error: function(data) {
                            // alert(data1);
                            console.log(data);
                        
                        }

                    })
                });

                //contrast
                document.getElementById('contrastNo').innerText = existContrastNo;
                $('#contrast').click(function(){
                    var contrastNo = $("#contrastNo").text();
                    console.log(contrastNo);
                    // contrastNo = parseInt(contrastNo) + 1;
                    $('#contrastNo').text(contrastNo);

                    $.ajax({
                        type: 'POST',
                        url: 'yourphppage.php',
                        dataType: "json",
                        data: {
                            // idofrow:id
                            idofrow:'',
                            'brightnessNoKey' : '',
                            'contrastNoKey' : contrastNo,
                            
                        },
                        success: function(data) {
                            console.log(data);
                            //    alert(data);
                            $("#contrastNo").text(data);
                            // $('input:text').val(data[0].message);
                        },
                        error: function(data) {
                            // alert(data);
                            console.log(data);
                        
                        }

                    })
                });
            });




        </script>

    </body>
</html>

<?php
// $id = ($_POST['idofrow']);
// echo $id;

?>


