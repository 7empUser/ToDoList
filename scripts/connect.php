<?php
    $link = mysqli_connect("ToDoList", "root", "");
    if (!$link) {
        die ("Error: ".$link->error());
    }
    $login = $_SESSION["login"];
    include_once("checkDBExist.php");
    include_once("countOfGroups.php");
    if (isset($_POST["newGroup"])) {
        include_once("newGroup.php");
    }
    if (isset($_POST["reg"]) or isset($_POST["signIn"])) {
        include_once("searchAndCheckUser.php");
    } elseif (isset($_POST["newRecord"])) {
        include_once("addNewRecord.php");
    }
    if (isset($_POST["show"])) {
        if (isset($_POST["complete"])) {
            include_once("editRecord.php");
        } elseif (isset($_POST["deleteGroup"]) or isset($_POST["delete"])) {
            include_once("delete.php");
        } 
        include_once ("outputRecords.php");
    }
?>