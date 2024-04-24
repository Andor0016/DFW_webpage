<?php
    $users = json_decode(file_get_contents("../data/users.json"), true);
    foreach( $users as $user ){
        if($user['email'] == $_POST['mail-login'] && $user['password'] == hash("sha256",$_POST['pass'])){
            session_start();
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION["isLogged"] = true;
            $_SESSION['user'] = $user;
            header("Location: ../index.php");
            exit();
        }
    }
    header("Location: ../pages/login.php");
    exit();
?>