<?php
    $messages = json_decode(file_get_contents("../data/messagesforband.json"), true);
    $id = $_GET["id"];
    foreach ($messages as $message) {
        if ($message["id"] == $id) {
            $message["isAnswered"] = true;
        }
    }
    file_put_contents("../data/messagesforband.json", json_encode($messages));
    header("Location: ../pages/contact.php");
    exit();
?>
