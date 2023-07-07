<?php
    $checkRecordSql = "SELECT `Header` FROM $login WHERE `id` = 1";
    if ($link->query($checkRecordSql) !== FALSE) {
        $readSql = "SELECT * FROM `$login`";
        $result = $link->query($readSql);
        foreach ($result as $row) {
            $id = $row["id"];
            $header = $row["Header"];
            $record = $row["Record"];
            $group = $row["GroupId"];
            if (isset($_POST["edit"]) and $_POST["hiddenId"] == $id) {
                echo ("<div class='record'>");
                    echo ("<form action='../pages/profile.php' method='POST'>");
                        echo ("<input type='text' name='header' maxlength='250' value='$header'>");
                        echo ("<textarea name='record' cols='30' rows='10' maxlength='65000'>$record</textarea>");
                        echo ("<input type='hidden' name='hiddenId' value='$id'></br>");
                        echo ("<input type='submit' name='complete' value='Готово'>");
                    echo("</form>");
            }  else {
                if ($group == $_SESSION["group"]) {
                    echo ("<div class='record'>");
                        echo ("<h5>$header</h5><p>$record</p>");
?>
                        <form action="../pages/profile.php" method="POST">
                            <input type="submit" name="edit" value="Изменить">
                            <input type="submit" name="delete" value="Удалить">
<?php
                            echo ("<input type='hidden' name='hiddenId' value='$id'>");
                        echo ("</form>");
                    echo ("</div>");
                }
            }
        }
    }
    
?>