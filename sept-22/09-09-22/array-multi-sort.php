<?php
$ar1 = array(10, 110, 100, 0);
$ar2 = array(1, 3, 2, 4);
// array_multisort($ar1);
array_multisort($ar1,$ar2);

// var_dump($ar1);//well sorted but second array not sorted
echo "<br/>";
// var_dump($ar2);

//multi dimension array sorting
$ar = array(
       array("10", 11, 100, 100, "a"),
       array(   1,  2, "2",   3,   1)
      );
array_multisort($ar[0], SORT_ASC, SORT_STRING,
                $ar[1], SORT_NUMERIC, SORT_DESC);
// var_dump($ar);

$arr1=array(
        array('23', 3,63,   21,"12",31,10,"212"),
        array(  2, 23,35,"232", 43,"23",23,"232")
    );

array_multisort($arr1[0],SORT_ASC,SORT_NUMERIC,
                $arr1[1],SORT_STRING,SORT_DESC);
var_dump($arr1);
// VAR_DUMP($arr1);
?>