<?php
    $_SESSION["countGroups"] += 1;
    $newGroupSql = "UPDATE `users` SET `CountGroups` = '".$_SESSION["countGroups"]."'";
    $link->query($newGroupSql);
    $_SESSION["group"] = $_SESSION["countGroups"];
    header("Location: ../pages/profile.php");
?>