<?php
    session_start();
    $users = json_decode(file_get_contents("../data/users.json"), true);
    $user = $_SESSION["user"];

    if($user['name'] != $_POST['nev']){
        $user['name'] = $_POST['nev'];
    }
    if($user['email'] != $_POST['mail']){
        $user['email'] = $_POST['mail'];
    }
    if( isset($_POST['tszam']) && $user['phone'] != $_POST['tszam']){
        $user['phone'] = $_POST['tszam'];
    }
    if( isset($_POST['address']) && $user['address'] != $_POST['adress']){
        $user['address'] = $_POST['adress'];
    }
    
    if( isset($_POST['old-pass']) && isset($_POST['pass']) && isset($_POST['pass-confirm']))
    {
        if($user['password'] == hash("sha256",$_POST['old-pass']) && $_POST['pass'] == $_POST['pass-confirm']){
            $user['password'] =hash("sha256", $_POST['pass']);
        }
    }

    foreach($users as $key => $value){
        if($value['id'] == $user['id']){
            $users[$key] = $user;
        }
    }
    
    file_put_contents("../data/users.json", json_encode($users));
    $_SESSION["user"] = $user;
    header("location: ../pages/profile/myprofile.php");
    exit();
?>