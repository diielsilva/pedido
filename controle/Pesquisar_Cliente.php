<?php
    include_once("Login_Efetuado.php");
    include_once("../classes/Cliente.php");
    include_once("../op_banco/OperacoesCliente.php");

    $cliente = new Cliente;
    $op_banco = new OperacoesCliente;
    $cliente->setNome($_POST["nome-cliente"]);
    $op_banco->pesquisarCliente($cliente);