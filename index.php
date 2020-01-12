<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="pedido,cliente">
    <meta name="author" content="Daniel Silva">
    <meta name="description" content="sistema de pedidos">
    <link rel="stylesheet" href="css/Style_Index.css">
    <title>Login - PEDIDO</title>
</head>

<body>
    <header>
        <h1>
            Bem-Vindo
        </h1>
    </header>
    <main>
        <section class="secao">
            <form action="controle/Realizar_Login.php" method="POST">
                <h1>Insira suas credenciais</h1>
                <p>Usuário:</p>
                <input type="text" name="usuario" required>
                <p>Senha:</p>
                <input type="password" name="senha" required>
                <input type="submit" value="Entrar">
            </form>
            <?php
            session_start();
            if (isset($_SESSION["erro-login"])) {
                echo "<p>" . $_SESSION["erro-login"] . "</p>";
                unset($_SESSION["erro-login"]);
            }
            session_destroy();
            ?>
        </section>
    </main>
</body>

</html>