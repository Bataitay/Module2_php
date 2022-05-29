<?php
session_start();
// Kiểm tra xem người dùng đã đăng nhập chưa, nếu có thì chuyển hướng người đó đến trang chào mừng
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}
include_once "../Login/db/userMsql.php";

// Xác định các biến và khởi tạo với các giá trị trống
$email_err = $password_err = $login_err = null;
$email = $password = null;

// Xử lý dữ liệu biểu mẫu khi biểu mẫu được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra xem tên người dùng có trống không
    if (empty(trim($_POST['email']))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Kiểm tra xem mật khẩu dùng có trống không
    if (empty(trim($_POST['password']))) {
        $password_err = "Please enter password.";
    } else {
        $password = trim($_POST["password"]);
    }
     // Xác thực thông tin đăng nhập
    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT id, email , password FROM user WHERE email = :email";
        if($stmt = $pdo->prepare($sql)){
             // Liên kết các biến với câu lệnh đã chuẩn bị dưới dạng tham số
             $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
             // Đặt thông số
            $param_email = trim($_POST["email"]);
            //thực câu lệnh đã chuẩn bị
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Mật khẩu chính xác, vì vậy hãy bắt đầu một phiên mới
                            session_start();
                            
                            //  Lưu trữ dữ liệu trong các biến phiên
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;                            
                            
                            // Chuyển hướng người dùng đến trang chào mừng
                            header("location: welcome.php");
                        } else{
                            // Mật khẩu không hợp lệ, hiển thị thông báo lỗi chung
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Tên người dùng không tồn tại, hiển thị thông báo lỗi chung
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // đóng câu lệnh
            unset($stmt);
        }
    }
    
    // đóng kết nối
    unset($pdo);
}
