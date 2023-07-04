<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <?php
            session_start();
            if ($_SESSION["onSystem"] == "on" or isset($_POST["onSystem"])) {
                include_once("pages/headerWithReg.php");
            } else {
                $_SESSION["onSystem"] = "on";
                include_once("pages/headerNoReg.php");
            }
            

        ?>

    </body>
</html>