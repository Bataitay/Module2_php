<?php
include_once "../Login/db/userMsql.php";


$objuser = new UserMsql();
$connect = $objuser->connect();
$email = $password = $confirm_password = $phone = $name = $date = null;
if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    if ($password != null && $email != null) {
        global $connect;
        $password = password_hash($password, PASSWORD_DEFAULT); //mã hóa mật khẩu
        $sql = "INSERT INTO `registration` (`name`, `email`, `password`, `birthday`, `phone`) VALUES (
        '".$_POST['name']."', 
        '".$_POST['email']."', 
        '".$_POST['password']."', 
        '".$_POST['birthday']."', 
        '".$_POST['phone']."'
        )";
        //thực hiện câu lệnh sql
        $connect->exec($sql);
        // echo '<pre>';
        // print_r($sql);
        // echo '<pre>';
        // die();
        if ($connect) {
            header('Location: Login.php?email');
        }
    }
}
