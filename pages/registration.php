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
            if ($_SESSION["onSystem"] == "on") {
                $_SESSION["onSystem"] = "on";
                include_once("headerWithReg.php");
            } else {
                include_once("headerNoReg.php");
            }

            if (!isset($_POST["reg"])) {
        ?>

        <div class="divRegForm">
            <h2>Регистрация</h2>
            <form action="registration.php" method="POST">
                <label>Логин</br>
                    <input type="text" name="login" maxlength="25" class="btnInput" required>
                    <span></span></br>
                </label>
                <label>Email</br>
                    <input type="email" name="email" maxlength="250" class="btnInput" required>
                    <span></span></br>
                </label>
                <label>Пароль</br>
                    <input type="password" name="pass" class="btnInput" required>
                    <span></span></br>
                    </label>
                <label>Повторите пароль</br>
                    <input type="password" name="checkPass" class="btnInput" required>
                    <span></span></br>
                </label>
                <input type="submit" value="Зарегистрируйтесь" name="reg" class="btnInput">
            </form>
        </div>

        <?php
            } else {
                include_once("../scripts/connect.php");
            }
        ?>

    </body>
</html>