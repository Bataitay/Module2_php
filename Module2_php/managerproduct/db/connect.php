<?php
$username="root";
$password="";


try {
    $conn = new PDO('mysql:host=localhost;dbname=products', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ' ket noi thanh cong';
    

} catch (PDOException $e) {
    echo "ket noi that bai: " . $e->getMessage();
}    

