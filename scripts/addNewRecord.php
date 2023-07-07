<?php
    $header = $_POST["header"];
    $record = $_POST["record"];
    $insertRecord = "INSERT INTO `$login`(`Header`, `Record`, `GroupId`) VALUES ('$header', '$record', '".$_SESSION["group"]."')";
    $link->query($insertRecord);
    header("Location: ../pages/profile.php");
?>