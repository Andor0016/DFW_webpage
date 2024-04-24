<?php
    session_start();
    $id = $_SESSION['id'];

    $users = json_decode(file_get_contents('../data/users.json'),true);
    $new_users = array();
    foreach($users as $user){
        if($user['id'] != $id){
            array_push($new_users, $user);
        }
    }

    file_put_contents("../data/users.json", json_encode($new_users));
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
?>