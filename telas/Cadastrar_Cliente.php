<?php
include_once("../controle/Login_Efetuado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Style_Cadastro_Cliente.css">
    <title>Cadastrar Cliente - PEDIDO</title>
</head>

<body>
    <header>
        <h1>Bem-Vindo</h1>
    </header>
    <main>
        <section class="secao-cadastro">
            <form action="../controle/Cadastrar_Cliente.php" method="POST">
                <p>Nome do Cliente: </p>
                <input type="text" name="nome" required>
                <p>Telefone do Cliente: </p>
                <input type="tel" name="telefone" id="" required>
                <input type="submit" value="Cadastrar">
            </form>
                <?php
                    if(isset($_SESSION["erro-cadastro"])){
                        echo "<p>".$_SESSION["erro-cadastro"]."</p>";
                        unset($_SESSION["erro-cadastro"]); 
                    }
                    else if(isset($_SESSION["cadastro-concluido"])){
                        echo "<p>".$_SESSION["cadastro-concluido"]."</p>";
                        unset($_SESSION["cadastro-concluido"]);
                    }
                ?>
                <hr>
            <a href="Menu.php"><button>Voltar</button></a>
        </section>
    </main>
</body>

</html>