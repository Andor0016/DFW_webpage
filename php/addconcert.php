<?php
    $concerts_data = json_decode(file_get_contents("../data/concerts.json"), true);
    $new_concert = array(
        "date" => $_POST["date"],
        "town" => $_POST["town"],
        "place" => $_POST["place"]
    );
    array_push($concerts_data, $new_concert);
    file_put_contents("../data/concerts.json", json_encode($concerts_data));
    header("Location: ../pages/concerts.php?response=Sikeres hozzáadás!");
    exit();
?>