<?php
    $checkDB = "CREATE DATABASE IF NOT EXISTS ToDoList";
    $link->query($checkDB);
    $link->select_db("ToDoList");
    if (isset($_POST["reg"]) or isset($_POST["signIn"])) {
        $checkTable = "CREATE TABLE IF NOT EXISTS users(id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
            Login tinytext NOT NULL,
            Email tinytext NOT NULL,
            Password text NOT NULL,
            CountGroups tinyint NOT NULL)";
        $link->query($checkTable);
    }
?>