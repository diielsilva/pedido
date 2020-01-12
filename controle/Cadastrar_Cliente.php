<?php
    include_once("Login_Efetuado.php");
    include_once("../op_banco/OperacoesCliente.php");
    include_once("../classes/Cliente.php");

    $cliente = new Cliente;
    $cliente->setNome($_POST["nome"]);
    $cliente->setTelefone($_POST["telefone"]);
    $op_banco = new OperacoesCliente;
    $op_banco->cadastrarCliente($cliente);
    