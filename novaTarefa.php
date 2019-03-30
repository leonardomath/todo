<?php
    require'classes/Usuario.php';
    session_start();
    Usuario::verificaSessao();

    if(isset($_POST['acao'])) {
        $nomeTarefa = addslashes($_POST['nome_tarefa']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tarefas.css">
    <link rel="stylesheet" href="css/novaTarefa.css">
    <title>ToDo - Tarefas</title>
</head>
<body>
    
        <?php require_once('components/nav.php'); ?>

        <section class="container">
            
            <form class="formulario-tarefa">
                <input type="text" placeholder="Nome da tarefa" name="nome_tarefa">
                <input type="submit" value="Cadastrar tarefa">
            </form>

            
        </section>
</body> 
</html>