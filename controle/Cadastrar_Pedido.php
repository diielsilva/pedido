<?php
    include_once("Login_Efetuado.php");
    include_once("../classes/Cliente.php");
    include_once("../classes/Pedido.php");
    include_once("../op_banco/OperacoesPedido.php");

    $cliente = new Cliente;
    $pedido = new Pedido;
    $op_banco = new OperacoesPedido;
    $cliente->setId($_POST["id-cliente"]);
    $pedido->setStatus($_POST["opcao"]);
    $pedido->setDescricao($_POST["descricao"]);
    $pedido->setData(date("Y-m-d"));
    $op_banco->cadastrarPedido($pedido,$cliente);
