<?php

    $login = trim($_POST["login"]);
    $email = trim($_POST["email"]);
    $pass = trim($_POST["pass"]);
    $checkPass = trim($_POST["checkPass"]);

    // Check Registration Form
    if (isset($_POST["reg"])) {
        $emailCheckReg = "/\w+@\w+\.\w+/";
    
        if (strlen($login) < 5 or strlen($login) > 25) {
            die ("Логин не подходит по длине. Используйте от 5 до 25 символов");
        } elseif (!preg_match($emailCheckReg, $email)) {
            die ("Email не того формата");
        } elseif (strlen($pass) < 8) {
            die ("Пароль меньше 8 символов");
        } elseif ($pass != $checkPass) {
            die ("Пароли не совпадают");
        }
    }

    $pass = md5($pass);
    $searchUserSql = "SELECT * FROM users";
    $data = $link->query($searchUserSql);
    $loginCoincidence = FALSE;
    $emailCoincidence = FALSE;
    $passCoincidence = FALSE;
    foreach ($data as $user) {
        $userLogin = $user["Login"];
        $userEmail = $user["Email"];
        $userPass = $user["Password"];
        if ($login == $userLogin or $login == "users") {
            $loginCoincidence = TRUE;
        }
        if ($email == $userEmail) {
            $emailCoincidence = TRUE;
        }
        if ($pass == $userPass) {
            $passCoincidence = TRUE;
        }
        if ($loginCoincidence == TRUE or $emailCoincidence == TRUE) {
            break;
        }
    }

    if (isset($_POST["reg"]) and !$loginCoincidence and !$emailCoincidence) {
        $insertUser = "INSERT INTO `users`(`Login`, `Email`, `Password`, `CountGroups`) VALUES ('$login', '$email', '$pass', 1)";
        $res = $link->query($insertUser);
        if ($res === FALSE) {
            echo($link->errno." ".$link->error);
        } else {
            echo("Вы зарегистрировались. Пожалуйста, авторизуйтесь");
            $_SESSION["login"] = $login;
        }
        $newRecordDB = "CREATE TABLE IF NOT EXISTS `$login`(id int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
            Header tinytext NOT NULL,
            Record text NOT NULL,
            GroupId tinyint NOT NULL)";
        $link->query($newRecordDB);
        $_SESSION["countGroups"] = 1;
        $_SESSION["sql"] = $link->errno." | ".$link->error;
    } elseif (isset($_POST["reg"]) and $loginCoincidence) {
        echo("Этот логин уже используется");
    } elseif (isset($_POST["reg"]) and $emailCoincidence) {
        echo("Этот Email Уже используется");
    } elseif (isset($_POST["signIn"]) and $loginCoincidence and $passCoincidence) {
        $_SESSION["onSystem"] = "on";
        $_SESSION["login"] = $login;
        $_SESSION["group"] = 1;
        header("Location: ../pages/profile.php");
    } elseif (isset($_POST["signIn"]) and $loginCoincidence) {
        echo ("$login $pass");
        echo("Неверный пароль");
    } elseif (isset($_POST["signIn"])) {
        echo("Пожалуйста, зарегистрируйтесь");
    }

?>