<?php
$array=[
    [1,3,6,7,5,9],
    [1,2,3,4,5],
];
function maxArray($array){
    $max= $array[0][0];
    for($i=0;$i<count($array);$i++){
        for($j=0;$j<count($array[$i]);$j++){
            if($array[$i][$j]>$max){
                $max= $array[$i][$j];
            }
        }
    }echo $max;
}
maxArray($array);