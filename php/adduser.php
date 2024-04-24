<?php
if (isset($_POST["nev"], $_POST["mail"], $_POST["pass"], $_POST["pass-confirm"])) {
    $nev = $_POST["nev"]; 
    $mail = $_POST["mail"];
    $pass = $_POST["pass"];
    $pass_confirm = $_POST["pass-confirm"];

    if ($pass != $pass_confirm) {
      header("Location: ../pages/login.php");
      exit();
    }
    $users = json_decode(file_get_contents("../data/users.json"), true);
    $address = "";
    $user = array(
      "id" => count($users)+1,
      "name" => $nev,
      "email" => $mail,
      "password" => hash("sha256", $pass), 
      "address" => $address,
      "phone" => "",
      "role" => "user"
    );

    $emailExists = false;
    $usernameExists = false;
    foreach($users as $u){
      if ($u["email"] == $mail) {
        $emailExists = true;
        break;
      }
      if ($u["name"] == $nev) {
        $usernameExists = true;
        break;
      }
    }

    if ($emailExists) {
      header("Location: ../pages/login.php");
      exit();
    }

    if ($usernameExists) {
      header("Location: ../pages/login.php");
      exit();
    }

    array_push($users, $user);
    file_put_contents("../data/users.json", json_encode($users));
    header("Location: ../index.php");
    exit();
  }
?>