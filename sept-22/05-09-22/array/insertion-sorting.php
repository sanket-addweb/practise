<?php

function insertionSort($arr,$len=6){
    for($i=0;$i<$len;$i++){
        $key=$arr[$i];
        $j=$i-1;
        while($j>=0 && $arr[$j]>$key){
            $arr[$j+1]=$arr[$j];
            $j--;//if condtion became true and enter in while loop afer changing position, j ne nagattive karo therefor it not enter second time
        }
        
            $arr[$j+1]=$key;//ane jo key i.e, i index valo element moto hoy to tene niche ni position par shift karo
        
    }
    return $arr;
}


// $array=[12,23,34,45];
// $arr=[34,54,32,89,23,12];
$array=array(34,54,32,89,23,12);

$len=count($array);

insertionSort($array,$len);

foreach($array as $arrayValues){
    echo $arrayValues.', ';
}




?>
<!-- function insertingSort(arr,len) {
            var i, j;
            // var len= arr.length ;
            for (i = 1; i < len; i++) {
                key = arr[i];
                j = i - 1;
                while (j >= 0 && arr[j] > key) {
                    arr[j + 1] = arr[j];// jo index-0 valo element moto hoy to interchange karo value
                    j = j - 1;
                }
                arr[j + 1] = key;// nahi to index-0 par element key(index having 1) ne lavi do
            }
        } -->