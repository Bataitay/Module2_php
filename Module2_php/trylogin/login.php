<?php
// Initialize the session
session_start();
 
// Kiểm tra xem người dùng đã đăng nhập chưa, nếu có thì chuyển hướng người đó đến trang chào mừng
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Xác định các biến và khởi tạo với các giá trị trống
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Xử lý dữ liệu biểu mẫu khi biểu mẫu được gửi
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Kiểm tra xem tên người dùng có trống không
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Kiểm tra xem mật khẩu dùng có trống không
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Xác thực thông tin đăng nhập
    if(empty($username_err) && empty($password_err)){
        //chuẩn bị câu lệnh lựa chọn
        $sql = "SELECT id, username, password FROM user WHERE username = :username";
        
        if($stmt = $pdo->prepare($sql)){
            // Liên kết các biến với câu lệnh đã chuẩn bị dưới dạng tham số
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            
            // Đặt thông số
            $param_username = trim($_POST["username"]);
            
            // thực câu lệnh đã chuẩn bị
            if($stmt->execute()){
                // Kiểm tra xem tên người dùng có tồn tại không, nếu có thì xác minh mật khẩu
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            // Mật khẩu chính xác, vì vậy hãy bắt đầu một phiên mới
                            session_start();
                            
                            //  Lưu trữ dữ liệu trong các biến phiên
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
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
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>