<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remote task</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
    <button id='sound2'>Sound</button>
    <p id="soundNo">0</p>
    <form method='post' action="">
        <!-- Sound :<input type="number" id='sound' max="10" min="0" onchange="mySound()"> -->
        <!-- Sound :<input type="number" id='sound' max="10" min="0" > -->
        <button id='sound'>Sound</button>
        <p id="soundNo">0</p>
        <br/><br/>
        Brightness : <input type="number" id='brightness' max="10" min="0" onchange='myBrightness()'>
        <br/><br/>
        Contrast : <input type="number" id='contrast' max="10" min="0" onchange= 'myContrast()'>
        <p id = 'demo'></p>
    </form>
    <!-- <script>
        function mySound(){
            var soundNumber = document.getElementById("sound").value;
            document.getElementById("demo").innerHTML = "You selected: " + soundNumber;
            var xmlhttp = new XMLHttpRequest();
                // xmlhttp.open("GET","update-sound.php?sound="+soundNumber,true);
                xmlhttp.open("GET","index.php?sound="+soundNumber,true);
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    // upQty[i].innerHTML = this.responseText;
                    // console.log(upQty[i].innerText);
                    console.log(this.responseText);
                    }
                };
            xmlhttp.send();
			
            
        }

        function myBrightness(){
            var brightnessNo = document.getElementById("brightness").value;
            document.getElementById("demo").innerHTML = "You selected: " + brightnessNo;
            
        }

        function myContrast(){
            var contrastNo = document.getElementById("contrast").value;
            document.getElementById("demo").innerHTML = "You selected: " + contrastNo;
            
        }
    </script> -->

    <script type="text/javascript"> 
        $(document).ready(function(){
            $('sound').change(function(){
                var variable = $( "#sound" ).val();
                console.log(result);
                $.ajax
                    ({ 
                        url: 'update-sound.php',
                        data: { variable : variable},
                        type: 'post',
                        success: function(result)
                        {
                            $('#sound').val(result);
                            // console.log(result);
                        }
                    });
            });
        });
    </script>
</body>
</html>

<?php


class remote{
    public function sound1(){
        $sound=$_POST['sound'];
        echo $sound;
        
    }
    public function brightness(){

    }
    public function contrast(){

    }
}
// $service=$_POST['service'];
// $specification=$_POST['specification'];
// $pDetail=$_POST['pDetail'];





?>