<?php
    $link = mysqli_connect("ToDoList", "root", "");
    if (!$link) {
        die ("Error: ".$link->error());
    }
    include_once("checkDBExist.php");
    if (isset($_POST["reg"]) or isset($_POST["signIn"])) {
        include_once("searchUser.php");
    } elseif (isset($_POST["newRecord"])) {
        $login = $_SESSION["login"];
        include_once("addNewRecord.php");
    } elseif (isset($_POST["showRecords"])) {
        $login = $_SESSION["login"];
        include_once ("outputRecords.php");
    }
?>