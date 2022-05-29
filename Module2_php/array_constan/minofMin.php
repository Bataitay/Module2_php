<?php
$arr= array(6,4,5,7,9,1);
function findmin($arr){
    $min=$arr[0];
    for($i=0;$i < count($arr);$i++){
        if($arr[$i]<$min){
            $min=$arr[$i];
        }
    } print_r ($min);
}   
findmin($arr);