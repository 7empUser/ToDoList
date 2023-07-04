<?php
    session_start();
    $_SESSION["onSystem"] = "";

    header("Location: ../index.php");
?>