
$("#soundNo").text(existSoundNo);

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
