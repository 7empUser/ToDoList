<?php
    $link = mysqli_connect("ToDoList", "root", "");
    if (!$link) {
        die ("Error: ".$link->error());
    }
    if (isset($_POST["reg"])) {
        include_once("checkDBExist.php");
    } elseif (isset($_POST["newRecord"])) {

    }
?>