<?php
echo 'method send data:' . $_SERVER['REQUEST_METHOD'];
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username =$_REQUEST['username'];
    $password =$_REQUEST['password'];
    echo  $username;
    echo  $password;
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        name: <input type="text" name="username"><br><br>
        password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>