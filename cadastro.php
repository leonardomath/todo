<?php

    require'classes/Usuario.php';

    if(isset($_POST['acao'])) {
        $email = addslashes($_POST['email']);
        $nome = addslashes($_POST['nome']);
        $senha = addslashes(md5($_POST['senha']));
        Usuario::cadastro($email,$nome,$senha);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>ToDo - Cadastro</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <section class="container">
            <h2>Cadastro de usúario</h2>
                <form method="post">
                <input type="email" placeholder="E-mail" name="email">
                <input type="text" placeholder="Nome" name="nome">
                <input type="password" placeholder="Senha" name="senha">
                <input type="submit" value="Cadastrar!" name="acao">
            </form>
    </section>
</body>
</html>