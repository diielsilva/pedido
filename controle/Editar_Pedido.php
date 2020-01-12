<?php
    include_once("Login_Efetuado.php");
    include_once("../classes/Pedido.php");
    include_once("../op_banco/OperacoesPedido.php");

    $pedido = new Pedido;
    $op_banco = new OperacoesPedido;
    $pedido->setId($_POST["id-pedido"]);
    $pedido->setStatus($_POST["opcao"]);
    $op_banco->editarPedido($pedido);