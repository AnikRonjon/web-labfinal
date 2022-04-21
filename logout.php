<?php
    session_start();
    unset($_SESSION["id"]);
    unset($_SESSION["email"]);
    if(session_destroy()) {
        header("Location: sign-in.php");
     }
?>