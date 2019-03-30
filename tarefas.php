<?php
    require'classes/Usuario.php';
    session_start();
    Usuario::verificaSessao();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tarefas.css">
    <title>ToDo - Tarefas</title>
</head>
<body>

        <?php require_once('components/nav.php'); ?>

        <section class="container">

            <a href="novaTarefa.php"><button>Nova tarefa</button></a>

            <section class="box">
                <section class="box-tarefa">
                    <h2>Tarefas</h2>
                    <section class="tarefa">
                        <p>Mensagem</p>
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                </section>

                <section class="box-tarefa">
                    <h2>Em progresso</h2>
                    <section class="tarefa">

                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                </section>

                <section class="box-tarefa">
                    <h2>Revisar</h2>
                    <section class="tarefa">

                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                </section>

                <section class="box-tarefa">
                    <h2>Finalizado</h2>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                    <section class="tarefa">
                        
                    </section>
                </section>
            </section>
        </section>
</body>
</html>