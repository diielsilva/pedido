<?php
    include_once("../controle/Login_Efetuado.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/Style_Pesquisa_Cliente.css">
        <title>Pesquisar Cliente - PEDIDO</title>
    </head>
    <body>
        <header>
            <h1>Bem-Vindo</h1>
        </header>
        <main>
            <section class="secao-pesquisa">
                <form action="../controle/Pesquisar_Cliente.php" method="POST">
                    <p>Insira o nome para pesquisar: </p>
                    <input type="text" name="nome-cliente" required>
                    <input type="submit" value="Pesquisar">
                </form>
                <?php
                    if(isset($_SESSION["erro-pesquisa"])){
                        echo "<p>".$_SESSION["erro-pesquisa"]."</p>";
                        unset($_SESSION["erro-pesquisa"]);
                    }
                ?>
                <hr>
                <a href="Menu.php"><button>Voltar</button></a>
            </section>
        </main>
    </body>
    </html>