<?php
    $checkRecordSql = "SELECT `Header` FROM $login WHERE `id` = 1";
    if ($link->query($checkRecordSql) !== FALSE) {
        $readSql = "SELECT * FROM `$login`";
        $result = $link->query($readSql);
        foreach ($result as $row) {
            $header = $row["Header"];
            $record = $row["Record"];
            echo ("<div class='record'><h4>$header</h4><p>$record</p></div>");
        }
    }
    
?>