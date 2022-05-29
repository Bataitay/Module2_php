<?php
function registration()
{
    if(!empty($_POST)){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $repassword = $_POST['repassword'];
        $check = $_POST['check'];
        
        setcookie("username", $username, time() +24*60*60, "/" );
        setcookie("email", $email, time() +24*60*60, "/" );
        setcookie("password", $password, time() +24*60*60, "/" );
        setcookie("repassword", $repassword, time() +24*60*60, "/" );
        setcookie("check", $check, time() +24*60*60, "/" );

    }
}

?>