<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/novologin.css">
    <title>Login</title>
</head>

<body>
    <form method="POST" action="../verificalogin.php">
        <div class="principal">

            <div class="box-left">
                <h1>Seja bem vindo(a)</h1>
                <img src="../Imagens/pata.svg" class="logo-login" alt="logo">
            </div>
            <div class="box-right">
                <div class="card-login">
                    <h1>Login</h1>
                    <div class="text-field">
                        <label for="usuario">Usuario</label>
                        <input type="usuario" name="Usuario" placeholder="Usuario">
                    </div>
                    <div class="text-field">
                        <label for="senha">Senha</label>
                        <input type="password" name="Senha" placeholder="Senha">
                    </div>
                    <button type='submit' class="btn-login">Entrar</button>
                    <a href="../cadastro__email.php">
                        <?php
                 session_start();
                    $_SESSION['user'] = "newUser";
                ?>
                        <a href="../cadastro__email.php">Cadastre-se<a>
                                <a class="btn btn-primary" href="/">Início</a>
    </form>
    </div>
    </div>
    </div>
</body>

</html>