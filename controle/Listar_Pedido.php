<?php
    include_once("Login_Efetuado.php");
    include_once("../op_banco/OperacoesPedido.php");

    $op_banco = new OperacoesPedido;
    $op_banco->listarPedido();
    header("location: ../telas/Listar_Pedido.php");