<?php

include_once("../classes/Admin.php");
include_once("../op_banco/OperacoesAdmin.php");

$op_admin = new OperacoesAdmin;
$admin = new Admin;
$admin->setUsuario($_POST["usuario"]);
$admin->setSenha($_POST["senha"]);
$op_admin->logarAdmin($admin);
