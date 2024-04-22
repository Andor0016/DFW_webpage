<?php
    if(empty($_POST)){
        header("Location: ../pages/contact.php");
        exit();
    }
    else{
        $nev = $_POST['nev'];
        $mail = $_POST['mail'];
        $tszam = $_POST['tszam'];
        $mssg = $_POST['mssg'];

        $messages = json_decode(file_get_contents('../data/messagesforband.json'),true);
    
        $element =  array(
            "name" => $nev,
            "mail" => $mail,
            "mob" => $tszam,
            "message" => $mssg,
            "isAnswered" => false);
        array_push($messages,$element);
        file_put_contents('../data/messagesforband.json', json_encode($messages));
    }
    header("Location: ../pages/contact.php");
    exit();
?>