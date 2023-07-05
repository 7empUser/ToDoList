<?php
    $login = $_SESSION["login"];
    $header = $_POST["header"];
    $record = $_POST["record"];
    $insertRecord = "INSERT INTO `$login`(`Header`, `Record`) VALUES ('$header', '$record')";
    $link->query($insertRecord);
?>