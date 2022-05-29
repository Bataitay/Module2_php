
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            width:250px ;
            margin-left: 400px;
            border-radius: 10px;
        }
        h2{
            text-align: center;
        }
        form {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <fieldset>
        <h2>Login</h2>
        <form action="" method="post">
        Username:<br> <input type="text" name="username"><br>
        Password<br> <input type="password" name="password"><br>
        <input type="submit" name="Sign In" value="Sign In">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if ($username === "admin" && $password === "admin") {
            echo "<h3>Welcome <span style='color:red'>" .$username. "</span> to website</h3>";
        } else{
            echo "<h3><span style='color:red'>Login Error</span></h3>";
        }
    }
?>
    </fieldset>
</body>
</html>
