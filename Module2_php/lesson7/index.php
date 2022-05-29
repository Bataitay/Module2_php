<?php
require_once "ArrayList.php";

$arrayLists = new ArrayList(4);
$arrayLists->add("luy");
$arrayLists->add("duong");
$arrayLists->add("cuong");
$arrayLists->add("linh");
$arrayLists->add("viet");
$arrayLists->add("hai");
$arrayLists->add("chon");



echo "<pre>";
print_r($arrayLists);
echo $arrayLists->remove(2);