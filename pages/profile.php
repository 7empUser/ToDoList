<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <title>Document</title>
    </head>
    <body>

        <?php
        
            session_start();
            if ($_SESSION["onSystem"] == "on") {
                include_once("headerWithReg.php");
            } else {
                include_once("headerNoReg.php");
            }

            if (isset($_POST["newRecord"])) {
                include_once("../scripts/connect.php");
            }
            if (isset($_POST["newGroup"])) {
                include_once("../scripts/connect.php");
            } 
            if (isset($_POST["group"])) {
                $_SESSION["group"] = $_POST["group"];
            }

        ?>
        <h2>Личный кабинет</h2>
        <div class="content">
            <div class="recordGroups">
                <form action="profile.php" method="POST">
        <?php
            for ($i = 1; $i <= $_SESSION["countGroups"]; $i++) {
                echo ("<input type='submit' name='group' value='$i'>");
            }
            if ($_SESSION["countGroups"] < 5) {
                echo ("<input type='submit' name='newGroup' value='Новая группа'>");
            }
        ?> 
                </form>
            </div>
            <div class="recordsTable">
                <h3>Текущие заметки</h3>
        
        <?php

            echo("<h4>Группа ".$_SESSION["group"]."</h4>");
            $_POST["showRecords"] = "";
            include_once("../scripts/connect.php");

        ?>
        
        </div>
            <div class="addNewRecord">
                <form action="profile.php" method="POST">
                    <h3>Добавить заметку</h3>
                    <label>Заголовок: </label>
                    <input type="text" name="header" maxlength="250"></br>
                    <label>Заметка: </label>
                    <textarea name="record" cols="30" rows="10" maxlength="65000"></textarea></br>
                    <input type="submit" name="newRecord">
                </form>
            </div>
        </div>

    </body>
</html>