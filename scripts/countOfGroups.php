<?php
    $searchGroupsSql = "SELECT `CountGroups` FROM `users` WHERE 'Login' = $login";
    $countGroups = $link->query($searchGroupsSql);
?>