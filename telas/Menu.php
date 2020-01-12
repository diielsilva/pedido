<?php
include_once("../controle/Login_Efetuado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Style_Menu.css">
    <title>Menu - PEDIDO</title>
</head>

<body>
    <header>
        <h1>Bem-Vindo</h1>
    </header>
    <main>
        <section class="secao-cliente">

            <div>
                <form action="../controle/Opcao_Menu.php" method="POST">
                    <h3>
                        Seção dos Clientes
                    </h3>
                    <select name="opcao" required>
                        <option value="" selected disabled>Clientes</option>
                        <option value="cadastrar-cliente">Cadastrar</option>
                        <option value="pesquisar-cliente">Pesquisar</option>
                        <option value="listar-clientes">Listar</option>
                        <option value="editar-cliente">Editar</option>
                        <option value="remover-cliente">Remover</option>
                    </select>
                    <input type="submit" value="Confirmar">
                </form>
            </div>

            <div>
                <form action="../controle/Opcao_Menu.php" method="POST">
                    <h3>Seção dos Pedidos</h3>
                    <select name="opcao" required>
                        <option value="" selected disabled>Pedidos</option>
                        <option value="cadastrar-pedido">Cadastrar</option>
                        <option value="listar-pedidos">Listar</option>
                        <option value="editar-pedido">Editar Status</option>
                        <input type="submit" value="Confirmar">
                    </select>
                </form>
            </div>
            <hr>
            <form action="../controle/Deslogar.php" method="POST">
                <input type="submit" value="Sair">
            </form>
        </section>
    </main>
</body>

</html>