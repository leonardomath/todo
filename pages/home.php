<?php

    if(isset($_POST['acao'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes(md5($_POST['senha']));
        Usuario::login($email,$senha);
    }

    if(isset($_GET['error-1'])) : ?>
        <script>alert("Usúario ou senha errados!");</script>
    <?php endif;

    if(isset($_GET['error-0'])) : ?>
        <script>alert("Você não tem permissão de estar aqui!");</script>
    <?php endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ToDo - Autenticação</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="container">
            <h1>ToDo</h1>
            <form method="post">
                <input type="email" placeholder="E-mail" name="email">
                <input type="password" placeholder="Senha" name="senha">
                <input type="submit" value="Entrar!" name="acao">
            </form>
            <a href="<?=PATH?>cadastro">Não possui conta? clique aqui.</a>
    </section>
</body>
</html>