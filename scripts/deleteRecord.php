<?php
    $id = $_POST["hiddenId"];
    $deleteSql = "DELETE FROM `$login` WHERE `id` = '$id'";
    $link->query($deleteSql);
    header("Location: ../pages/profile.php");
?>