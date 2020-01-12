<?php
    include_once("../controle/Login_Efetuado.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/Style_Cadastro_Pedido.css">
        <title>Cadastrar Pedido - PEDIDO</title>
    </head>
    <body>
        <header>
            <h1>Bem-Vindo</h1>
        </header>
        <main>
            <section class="secao-cadastro">
                <form action="../controle/Cadastrar_Pedido.php" method="POST">
                    <p>Insira o ID do Cliente</p>
                    <input type="number" name="id-cliente" required>
                    <select name="opcao" required>
                        <option value="" selected disabled>Status do Pedido</option>
                        <option value="Concluido">Concluido</option>
                        <option value="Pendente">Pendente</option>
                    </select>
                    <p>Insira a Descrição: (Como produto do pedido)</p>
                    <input type="text" name="descricao" id="" required>
                    <input type="submit" value="Cadastrar">
                    <?php
                        if(isset($_SESSION["erro-cadastro"])){
                            echo "<p>".$_SESSION["erro-cadastro"]."</p>";
                            unset($_SESSION["erro-cadastro"]);
                        }
                        else if(isset($_SESSION["sucesso-cadastro"])){
                            echo "<p>".$_SESSION["sucesso-cadastro"]."</p>";
                            unset($_SESSION["sucesso-cadastro"]);
                        }
                    ?>
                </form>
                <hr>
                <a href="Menu.php"><button>Voltar</button></a>
            </section>
        </main>
    </body>
    </html>