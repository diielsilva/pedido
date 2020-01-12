<?php
    include_once("Login_Efetuado.php");
    unset($_SESSION["sucesso-login"]);
    session_destroy();
    header("location: ../index.php");