<?php
$primeNum=12;
$primeFalse=0;

for($i=2;$i<=$primeNum/2;$i++){
    if($primeNum%$i==0){
        $primeFalse=1;
        break;
    }
}

if($primeFalse==1){
    echo $primeNum.' is not prime number';
}
else{
    echo $primeNum.' is prime number';
}

?>