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

        <div class="profileH2">
            <h2>Личный кабинет</h2>
        </div>
        <div class="content">
            <div class="recordsTable">
                <h3>Текущие заметки</h3>
                <div class="recordGroups">
                    <form action="profile.php" method="POST">
            <?php

                for ($i = 1; $i <= $_SESSION["countGroups"]; $i++) {
                    echo ("<input type='submit' name='group' value='$i' class='groupStyle'>");
                }
                if ($_SESSION["countGroups"] < 5) {
                    echo ("<input type='submit' name='newGroup' value='Новая группа' class='newGroupStyle'>");
                }

            ?> 
                    </form>
                </div>
                <div class="recordOutput">
                <?php

                    echo ("<h4>Группа ".$_SESSION["group"]."</h4>");
                    $_POST["show"] = "";
                    include_once("../scripts/connect.php");

                ?>
                    <form action="profile.php" method="POST" class="deleteGroup">
                        <input type="submit" name="deleteGroup" value="Очистить группу">
                    </form>
                </div>
            </div>

            <div class="addNewRecord">
                <h3>Добавить заметку</h3>
                <form action="profile.php" method="POST">
                    <label>Заголовок<br>
                        <input type="text" name="header" maxlength="250" class="btnInput"></br>
                    </label>
                    <label>Заметка<br>
                        <textarea name="record" cols="30" rows="10" maxlength="65000" class="btnInput"></textarea></br>
                    </label>
                    <input type="submit" name="newRecord" class="btnInput">
                </form>
            </div>
        </div>

    </body>
</html>