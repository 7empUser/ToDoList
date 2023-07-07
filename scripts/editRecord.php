<?php
    $id = $_POST["hiddenId"];
    $header = $_POST["header"];
    $record = $_POST["record"];
    $updateSql = "UPDATE `$login` SET `Header` = '$header', `Record` = '$record' WHERE `id` = '$id'";
    $link->query($updateSql);
    header("Location: ../pages/profile.php");
?>