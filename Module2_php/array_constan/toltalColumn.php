<?php
 $array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
function total ($array) {
    $sum=$sum1=$sum2=$sum3=0;
    $length=count($array);
    for ($i=0; $i<$length; $i++) :
            $sum += $array[$i][$length -($length-$i)];
            $sum1 += $array[$i][$length - ($length-1)];          
            $sum2 += $array[$i][$length - ($length-2)];          
            $sum3 += $array[$i][$length - ($length-3)];          

        endfor;
        echo $sum .'<br>';
        echo $sum1 .'<br>';
        echo $sum2 .'<br>';
        echo $sum3 .'<br>';

} 
total ($array);