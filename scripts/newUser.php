<?php
    $login = trim($_POST["login"]);
    $email = trim($_POST["email"]);
    $pass = md5(trim($_POST["pass"]));
    $insertUser = "INSERT INTO `users`(`Login`, `Email`, `Password`) VALUES ('$login', '$email', '$pass')";
    $res = $link->query($insertUser);
    if ($res === FALSE) {
        echo($link->errno." ".$link->error);
    } else {
        echo("Зарегистрировано");
    }
    $_SESSION["onSystem"] = "on";
?>