<?php
for($i=1;$i<4;$i++){
for($j=1;$j<8;$j++){
    echo " *"  ;
}  echo  " *"  . "<br>";
}
echo "=================". "<br>";
for($i=1;$i<6;$i++){
    for($j=1;$j<$i;$j++){
        echo " *"  ;
    }  echo  " *"  . "<br>"; 
}
echo "=================". "<br>";
for($i=5;$i>=1;$i--){
    for($j=1;$j<$i;$j++){
        echo " *"  ;
    }  echo  " *"  . "<br>"; 
}
for ($i = 1; $i < 5; $i++) {
    for ($j = 5; $j <= $i; $j--) {
        echo "&nbsp";
        
    } 
    for($j=0;$j>$i;$j++){
       echo "*";
    }echo '<br>';
} echo '<br>';

?>
