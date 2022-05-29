<?php
 $array = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];
function calculateDiagonal($array) {
   
    $length = count($array);
    $first = $second = 0; 
    $total=0;
    for ($i = 0; $i < $length; $i++):
        $first += $array[$i][$i];
        $second += $array[$i][$length - $i - 1]; 
        $total= $first + $second;
    endfor;
    echo 'diagonal line first'.$first.'<br>';
    echo 'diagonal line second'.$second .'<br>';
    echo 'total 2 diagonal line'.$total .'<br>';
}
calculateDiagonal($array);