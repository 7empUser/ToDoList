<?php
    $id = $_POST["hiddenId"];
    $group = $_SESSION["group"];
    if (isset($_POST["delete"])) {
        $deleteSql = "DELETE FROM `$login` WHERE `id` = '$id'";
    } elseif (isset($_POST["deleteGroup"])) {
        $deleteSql = "DELETE FROM `$login` WHERE `GroupId` = '$group'";
    }
    $link->query($deleteSql);
    header("Location: ../pages/profile.php");
?>