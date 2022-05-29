<?php
$array =[1, 2, 3, 4, 5, 6, 7];
$length = count($array);
$find=$array[1];
for($i=0;$i<$length;$i++) {
    if($array[$i] == $find) {
        echo $i;
    }
}