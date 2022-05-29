<?php
class UserMsql {
    public function connect()
    {
        $host_name = "localhost";
        $db_name = "user";
        $username = "root";
        $password = "";
        $dsn = "mysql:host=$host_name;dbname=$db_name";
        
        try {
            $connect = new PDO($dsn,$username,$password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $connect;
    
        } catch (PDOException $e) {
            echo "ket noi that bai: " . $e->getMessage();
        }           
    }
}
?>