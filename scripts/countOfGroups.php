<?php
    $searchGroupsSql = "SELECT `CountGroups` FROM `users` WHERE `Login` = '$login'";
    $result = $link->query($searchGroupsSql);
    foreach ($result as $row) {
        $_SESSION["countGroups"] = $row["CountGroups"];
    }
?>