<?php
$basePosition=1;
$revNo=0;
function reverse($num){
    global $basePosition;
    global $revNo;
    if($num>0){
        reverse(floor($num/10));

        $r=$num%10;
        $revNo=$revNo+$r*$basePosition;
        $basePosition=$basePosition*10;

    }
    return $revNo;
}
$num1=1235;
$n1=$num1;
echo "The reverse number of $n1 is ".reverse($num1);
// echo reverse(1234);


?>