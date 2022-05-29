<?php
$string =' duong99@gmail.com ';
$pattern = '[^@]+@[^@]+\.[a-zA-Z]{2,}';
if (preg_match($pattern, $string)) {
echo 'Khớp';
} else {
echo 'Không khớp';
}
?>