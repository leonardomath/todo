<?php
require 'classes/Usuario.php';
session_start();
Usuario::verificaSessao();
$id_usuario = $_SESSION['id_usuario'];

if(isset($_POST['id_tarefa'])) {
    $id_tarefa = $_POST['id_tarefa'];
    $status = $_POST['acoes_tarefa'];
    Tarefas::updateTarefa($status,$id_tarefa,$id_usuario);
}

if(isset($_POST['id_tarefa_delete'])) {
     $id_tarefa = $_POST['id_tarefa_delete'];
     if(Tarefas::deleteTarefa($id_usuario,$id_tarefa)) {
        echo '<script>alert("Tarefa apagada com sucesso!");</script>';
     } else {
        echo '<script>alert("Ops, occoreu um erro interno!");</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tarefas.css">
    <title>ToDo - Tarefas</title>
</head>

<body>

    <?php require_once('components/nav.php'); ?>

    <section class="container">

        <a href="<?= PATH ?>novaTarefa"><button>Nova tarefa</button></a>

        <section class="box">
            <section class="box-tarefa">
                <h2>Tarefas</h2>
                <?php $tarefas = Tarefas::getTarefas($id_usuario, 0); ?>
                <?php if ($tarefas != NULL) : ?>
                    <?php foreach ($tarefas as $tarefa) : ?>
                        <section class="tarefa">
                            <section id="<?=$tarefa['id']?>" class="options">
                                <i class="fas fa-ellipsis-h options-close" onclick="closeOptions('#<?=$tarefa['id']?>')"></i>
                                <form id="formDelete<?=$tarefa['id']?>" method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa_delete">
                                    <i onclick="formSubmit(<?=$tarefa['id']?>)" class="fas fa-times deletar"></i>
                                </form>
                                <form method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa">
                                    <select name="acoes_tarefa">
                                        <option disabled selected>Status</option>
                                        <option value="1">Em progresso</option>
                                        <option value="2">Revisar</option>
                                        <option value="3">Finalizado</option>
                                    </select>
                                    <input type="submit" value="Salvar">
                                </form>
                            </section>
                            <i class="fas fa-ellipsis-h options-open" onclick="openOptions('#<?=$tarefa['id']?>')"></i>
                            <p><?= $tarefa['nome_tarefa'] ?></p>
                        </section>
                    <?php endforeach; ?>
                <?php endif; ?>
            </section>

            <section class="box-tarefa">
                <h2>Em progresso</h2>
                <?php $tarefas = Tarefas::getTarefas($id_usuario, 1); ?>
                <?php if ($tarefas != NULL) : ?>
                    <?php foreach ($tarefas as $tarefa) : ?>
                        <section class="tarefa">
                            <section id="<?=$tarefa['id']?>" class="options">
                                <i class="fas fa-ellipsis-h options-close" onclick="closeOptions('#<?=$tarefa['id']?>')"></i>
                                <form id="formDelete<?=$tarefa['id']?>" method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa_delete">
                                    <i onclick="formSubmit(<?=$tarefa['id']?>)" class="fas fa-times deletar"></i>
                                </form>
                                <form method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa">
                                    <select name="acoes_tarefa">
                                        <option disabled selected>Status</option>
                                        <option value="0">Reniciar Tarefa</option>
                                        <option value="1">Em progresso</option>
                                        <option value="2">Revisar</option>
                                        <option value="3">Finalizado</option>
                                    </select>
                                    <input type="submit" value="Salvar">
                                </form>
                            </section>
                            <i class="fas fa-ellipsis-h options-open" onclick="openOptions('#<?=$tarefa['id']?>')"></i>
                            <p><?= $tarefa['nome_tarefa'] ?></p>
                        </section>
                    <?php endforeach; ?>
                <?php endif; ?>
            </section>

            <section class="box-tarefa">
                <h2>Revisar</h2>
                <?php $tarefas = Tarefas::getTarefas($id_usuario, 2); ?>
                <?php if ($tarefas != NULL) : ?>
                    <?php foreach ($tarefas as $tarefa) : ?>
                        <section class="tarefa">
                            <section id="<?=$tarefa['id']?>" class="options">
                                <i class="fas fa-ellipsis-h options-close" onclick="closeOptions('#<?=$tarefa['id']?>')"></i>
                                <form id="formDelete<?=$tarefa['id']?>" method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa_delete">
                                    <i onclick="formSubmit(<?=$tarefa['id']?>)" class="fas fa-times deletar"></i>
                                </form>
                                <form method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa">
                                    <select name="acoes_tarefa">
                                        <option disabled selected>Status</option>
                                        <option value="0">Reniciar Tarefa</option>
                                        <option value="1">Em progresso</option>
                                        <option value="2">Revisar</option>
                                        <option value="3">Finalizado</option>
                                    </select>
                                    <input type="submit" value="Salvar">
                                </form>
                            </section>
                            <i class="fas fa-ellipsis-h options-open" onclick="openOptions('#<?=$tarefa['id']?>')"></i>
                            <p><?= $tarefa['nome_tarefa'] ?></p>
                        </section>
                    <?php endforeach; ?>
                <?php endif; ?>
            </section>

            <section class="box-tarefa">
                <h2>Finalizado</h2>
                <?php $tarefas = Tarefas::getTarefas($id_usuario, 3); ?>
                <?php if ($tarefas != NULL) : ?>
                    <?php foreach ($tarefas as $tarefa) : ?>
                        <section class="tarefa">
                            <section id="<?=$tarefa['id']?>" class="options">
                                <i class="fas fa-ellipsis-h options-close" onclick="closeOptions('#<?=$tarefa['id']?>')"></i>
                                <form id="formDelete<?=$tarefa['id']?>" method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa_delete">
                                    <i onclick="formSubmit(<?=$tarefa['id']?>)" class="fas fa-times deletar"></i>
                                </form>
                                <form method="post">
                                    <input type="hidden" value="<?= $tarefa['id'] ?>" name="id_tarefa">
                                    <select name="acoes_tarefa">
                                        <option disabled selected>Status</option>
                                        <option value="0">Reniciar Tarefa</option>
                                        <option value="1">Em progresso</option>
                                        <option value="2">Revisar</option>
                                        <option value="3">Finalizado</option>
                                    </select>
                                    <input type="submit" value="Salvar">
                                </form>
                            </section>
                            <i class="fas fa-ellipsis-h options-open" onclick="openOptions('#<?=$tarefa['id']?>')"></i>
                            <p><?= $tarefa['nome_tarefa'] ?></p>
                        </section>
                    <?php endforeach; ?>
                <?php endif; ?>
            </section>
        </section>
    </section>
    <script src="<?=PATH?>js/jquery.js"></script>
    <script src="<?=PATH?>js/options.js"></script>
    <script src="<?=PATH?>js/formDelete.js"></script>
</body>
</html>