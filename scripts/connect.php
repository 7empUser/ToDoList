<?php
    $link = mysqli_connect("ToDoList", "root", "");
    if (!$link) {
        die ("Error: ".$link->error());
    }
    if (!isset($_POST["newRecord"])) {
        include_once("checkDBExist.php");
        include_once("searchUser.php");
    }
?>