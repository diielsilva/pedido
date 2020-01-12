<?php
    include_once("Login_Efetuado.php");
    include_once("../op_banco/OperacoesCliente.php");

    $op_banco = new OperacoesCliente;
    $op_banco->listarClientes();