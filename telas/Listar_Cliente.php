<?php
include_once("../controle/Login_Efetuado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Style_Listar_Cliente.css">
    <title>Listar Clientes - PEDIDO</title>
</head>

<body>
    <header>
        <h1>Bem-Vindo</h1>
    </header>
    <main>
        <section class="listar-clientes">
            <table border="1">
                <thead>
                    <h3>
                        Resultado da Pesquisa
                    </h3>
                </thead>
                <tr>
                    <td>ID do Cliente</td>
                    <td>Nome</td>
                    <td>Telefone</td>
                </tr>
                <?php
                    if(isset($_SESSION["lista-cliente"])){
                        for ($x = 0; $x < sizeof($_SESSION["lista-cliente"]); $x++) {
                            echo "<tr>";
                            echo "<td>" . $_SESSION["lista-cliente"][$x]["id"] . "</td>";
                            echo "<td>" . $_SESSION["lista-cliente"][$x]["nome"] . "</td>";
                            echo "<td>" . $_SESSION["lista-cliente"][$x]["telefone"] . "</td>";
                            echo "</tr>";
                        }
                        unset($_SESSION["lista-cliente"]);
                    }
                ?>
            </table>
            <hr>
            <a href="Menu.php"><button>Voltar</button></a>
        </section>
    </main>
</body>

</html>