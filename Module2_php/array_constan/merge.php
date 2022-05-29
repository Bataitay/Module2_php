<?php
$array = [1,3,5,6,8];
$array1 = [1,2,3,4,5,6,7];
$array2 =[];
function merge($array,$array1,$array2){
    $dem=0;
    for($i=0;$i<count($array);$i++){
            $array2[$dem]=$array[$i];
            $dem++;
        }for($i=0;$i<count($array1);$i++){
            $array2[$dem]=$array1[$i];
            $dem++;
    } echo "<pre>";
    print_r($array2);
}
    merge($array,$array1,$array2);
