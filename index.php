<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>+RECORD</title>
    </head>
    <body>
        
        <?php
            session_start();
            if ($_SESSION["onSystem"] == "on") {
                $_SESSION["onSystem"] = "on";
                include_once("pages/headerWithReg.php");
            } else {
                include_once("pages/headerNoReg.php");
            }
        ?>
        <h2>Главная</h2>

    </body>
</html>