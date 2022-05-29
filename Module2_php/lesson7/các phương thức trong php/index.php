
<?php
/**
* Created by PhpStorm.
* User: phanluan
 * Date: 27/10/2018
 * Time: 21:55
*/
include "method.php";
include "cacmethodlinkedlist.php";

$object = new LinkList();
$student1 = new LinkList("Hưng",8);
$student6 = new Student("Dương",10);
$student2 = new Student("Nhung",9);
$student3 = new Student("Minh",7);
$student4 = new Student("Sang",4);
$student5 = new Student("Trung",5);
$object->insertFirst("hai nam", 9);
$object->insertFirst("nam long ", 10);
$object->insertFirst("long long ", 10);
$object->insertLast("viet", 9);
$object->insertLast("viet nam", 5);
echo "<pre>";
print_r($object);
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
print_r($listInteger);
echo $listInteger->get(1);
echo $listInteger->clear(1);