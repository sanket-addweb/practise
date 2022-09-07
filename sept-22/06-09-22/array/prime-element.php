<?php

$num=array(12,23,34,11,3,5,8,7);

for($j=0;$j<count($num);$j++){
    for($i=2;$i<$num[$j]/2;$i++){
                if($num[$j]%$i==0){
                    echo "$num[$j] not prime<br/>";
                    // $prime=0;
                    break;
                }
                else{
                    echo "$num[$j] is prime<br/>";
                    break;
                }
            }
                // if($prime==0){
                //     echo $num[$j]. ' is not prime<br/>';
                // }
                // else{
                //     echo $num[$j].' is prime<br/>';
                // }
}


?>