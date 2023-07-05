<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <title>+RECORD</title>
    </head>
    <body>

        <?php
            session_start();
            if ($_SESSION["onSystem"] == "on" or isset($_POST["onSystem"])) {
                $_SESSION["onSystem"] = "on";
                include_once("headerWithReg.php");
            } else {
                include_once("headerNoReg.php");
            }

            if (!isset($_POST["reg"])) {
        ?>

        <div class="divRegForm">
                <form action="registration.php" method="POST">
                    <label>Логин:</label>
                    <input type="text" name="login">
                    <label>Email:</label>
                    <input type="email" name="email">
                    <label>Пароль:</label>
                    <input type="password" name="pass">
                    <label>Повторите пароль:</label>
                    <input type="password" name="checkPass">
                    <input type="submit" value="Зарегистрируйтесь" name="reg">
                </form>
        </div>

        <?php
            } else {
                include_once("../scripts/connect.php");
            }
        ?>

    </body>
</html>