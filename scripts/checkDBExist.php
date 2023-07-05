<?php
    $checkDB = "CREATE DATABASE IF NOT EXISTS ToDoList";
    $link->query($checkDB);
    $link->select_db("ToDoList");
    $checkTable = "CREATE TABLE IF NOT EXISTS users";
    $link->query($checkTable);
?>