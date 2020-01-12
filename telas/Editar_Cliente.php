<?php
    include_once("../controle/Login_Efetuado.php");
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="../css/Style_Editar_Cliente.css">
        <title>Editar Cliente - PEDIDO</title>
    </head>
    <body>
        <header>
            <h1>Bem-Vindo</h1>
        </header>
        <main>
            <section class="secao-edicao">
                <form action="../controle/Editar_Cliente.php" method="POST">
                    <h3>Insira ao menos 1 campo opcional</h3>
                    <p>ID do Cliente: (Obrigatório)</p>
                    <input type="number" name="id-edicao" required>
                    <p>Nome do Cliente: (Opcional)</p>
                    <input type="text" name="nome-edicao">
                    <p>Telefone do Cliente: (Opcional)</p>
                    <input type="tel" name="tel-edicao">
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