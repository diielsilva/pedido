<?php
    include_once("../controle/Login_Efetuado.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/Style_Editar_Pedido.css">
        <title>Editar Pedido - PEDIDO</title>
    </head>
    <body>
        <header>
            <h1>Bem-Vindo</h1>
        </header>
        <main>
            <section class="editar-pedido">
                <form action="../controle/Editar_Pedido.php" method="POST">
                    <p>Insira o ID do Pedido:</p>
                    <input type="number" name="id-pedido" required>
                    <select name="opcao"  required>
                        <option value="" selected disabled>Status do Pedido</option>
                        <option value="Pendente">Pendente</option>
                        <option value="Concluido">Concluido</option>
                    </select>
                    <input type="submit" value="Editar">
                </form>
                <?php
                    if(isset($_SESSION["erro-edicao"])){
                        echo "<p>".$_SESSION["erro-edicao"]."</p>";
                        unset($_SESSION["erro-edicao"]);
                    }
                    else if(isset($_SESSION["sucesso-edicao"])){
                        echo "<p>".$_SESSION["sucesso-edicao"]."</p>";
                        unset($_SESSION["sucesso-edicao"]);
                    }
                ?>
                <hr>
                <a href="Menu.php"><button>Voltar</button></a>
            </section>
        </main>
    </body>
    </html>