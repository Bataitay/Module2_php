<?php
$username="root";
$password="";


try {
    $conn = new PDO('mysql:host=localhost;dbname=qlisinhvien', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo ' ket noi thanh cong';
    

} catch (PDOException $e) {
    echo "ket noi that bai: " . $e->getMessage();
}    


$stmt = $conn->query('SELECT * FROM `sinhvien`');
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchALL();

print_r($rows);