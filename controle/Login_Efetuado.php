<?php

    session_start();
    if(!isset($_SESSION["sucesso-login"])){
        header("location: ../index.php");
    }