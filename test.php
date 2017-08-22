<?php
    $handle = fopen("BD/users.txt", "r");
    list($password) = explode(" ", fgets($handle));
    $pass = $_POST["password"];
    $name = $_POST["username"];
    	 if($pass == $password){
        header("Location: http://test.tolmachov3.php.a-level.com.ua/chat.php");
    }
    if (!($pass == $password)){
 header("Location: http://test.tolmachov3.php.a-level.com.ua/sign_in.php");
    }
?>
