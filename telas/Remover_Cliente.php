<?php
    include_once("../controle/Login_Efetuado.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/Style_Remover_Cliente.css">
        <title>Remover Cliente - PEDIDO</title>
    </head>
    <body>
        <header>
            <h1>Bem-Vindo</h1>
        </header>
        <main>
            <section class="secao-remover">
                <form action="../controle/Remover_Cliente.php" method="POST">
                    <p>Insira o ID para remoção:</p>
                    <input type="number" name="id-remocao" required>
                    <input type="submit" value="Remover">
                </form>
                <?php
                    if(isset($_SESSION["erro-remocao"])){
                        echo "<p>".$_SESSION["erro-remocao"]."</p>";
                        unset($_SESSION["erro-remocao"]);
                    }
                    else if(isset($_SESSION["sucesso-remocao"])){
                        echo "<p>".$_SESSION["sucesso-remocao"]."</p>";
                        unset($_SESSION["sucesso-remocao"]);
                    }
                ?>
                <hr>
                <a href="Menu.php"><button>Voltar</button></a>
            </section>
        </main>
    </body>
    </html>