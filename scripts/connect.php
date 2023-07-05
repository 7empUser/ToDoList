<?php
    $link = mysqli_connect("ToDoList", "root", "");
    if (!$link) {
        die ("Error: ".$link->error());
    }
    include_once("checkDBExist.php");
    if (!isset($_POST["newRecord"])) {
        include_once("searchUser.php");
    } elseif (isset($_POST["newRecord"])) {
        include_once("addNewRecord.php");
    }
?>