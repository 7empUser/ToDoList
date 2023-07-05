<?php
    $checkDB = "CREATE DATABASE IF NOT EXISTS ToDoList";
    $link->query($checkDB);
    $link->select_db("ToDoList");
    if (!isset($_POST["newRecord"])) {
        $checkTable = "CREATE TABLE IF NOT EXISTS users(id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
            Login tinytext NOT NULL,
            Email tinytext NOT NULL,
            Password text NOT NULL)";
        $link->query($checkTable);
    } elseif(isset($_POST["newRecord"])) {
        $checkTable = "CREATE TABLE IF NOT EXISTS ".$_SESSION["login"]."(id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
            Header tinytext NOT NULL,
            Record text NOT NULL)";
        $link->query($checkTable);
    }
    
?>