<?php
    session_start();
    Usuario::verificaSessao();

    if(isset($_POST['acao'])) {
        $nomeTarefa = addslashes($_POST['nome_tarefa']);
        $id_usuario = $_SESSION['id_usuario'];
        if(Tarefas::setTarefa($id_usuario,$nomeTarefa)) {
            echo '<script>alert("Tarefa cadastrada com sucesso!");</script>';
        } else {
            echo '<script>alert("Ops, occoreu um erro interno!");</script>';
        }
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
            
            <form method="post" class="formulario-tarefa">
                <input type="text" placeholder="Nome da tarefa" name="nome_tarefa" required>
                <input type="submit"  name="acao" value="Cadastrar tarefa">
            </form>

            
        </section>
</body> 
</html>