<?php
include_once("../controle/Login_Efetuado.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Style_Listar_Pedido.css">
    <title>Listar Pedidos - PEDIDO</title>
</head>

<body>
    <header>
        <h1>Bem-Vindo</h1>
    </header>
    <main>
        <section class="listar-pedido">
            <table border="1">
                <thead>
                    <h3>
                        Lista de Pedidos
                    </h3>
                </thead>
                <tr>
                    <td>Nome do Cliente</td>
                    <td>Data do Pedido</td>
                    <td>Status do Pedido</td>
                    <td>Descricao do Pedido</td>
                </tr>
                <?php
                if (isset($_SESSION["listar-pedido"])) {
                    for ($x = 0; $x < sizeof($_SESSION["listar-pedido"]); $x++) {
                        echo "<tr>";
                        echo "<td>" . $_SESSION["listar-pedido"][$x]["nome"] . "</td>";
                        echo "<td>" . $_SESSION["listar-pedido"][$x]["datapedido"] . "</td>";
                        echo "<td>" . $_SESSION["listar-pedido"][$x]["statuspedido"] . "</td>";
                        echo "<td>" . $_SESSION["listar-pedido"][$x]["descricao"] . "</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            <hr>
            <a href="Menu.php"><button>Voltar</button></a>
        </section>
    </main>
</body>

</html>