<?php
    include_once("Login_Efetuado.php");

    $opcao_menu = $_POST["opcao"];

    if($opcao_menu == "cadastrar-cliente"){
        header("location: ../telas/Cadastrar_Cliente.php");
    }
    
    else if($opcao_menu == "listar-clientes"){
        header("location: Listar_Cliente.php");
    }

    else if($opcao_menu == "pesquisar-cliente"){
        header("location: ../telas/Pesquisar_Cliente.php");
    }

    else if($opcao_menu == "editar-cliente"){
        header("location: ../telas/Editar_Cliente.php");
    }

    else if($opcao_menu == "remover-cliente"){
        header("location: ../telas/Remover_Cliente.php");
    }
    
    else if($opcao_menu == "cadastrar-pedido"){
        header("location: ../telas/Cadastrar_Pedido.php");
    }
    
    else if($opcao_menu == "listar-pedidos"){
        header("location: Listar_Pedido.php");
    }

    else if($opcao_menu == "editar-pedido"){
        header("location: ../telas/Editar_Pedido.php");
    }