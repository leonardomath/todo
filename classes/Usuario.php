<?php

require'classes/Conexao.php';

class Usuario {

    public static function verificaSessao() {
        if(!isset($_SESSION['email']) || empty($_SESSION['email'])) {
            header("Location: index.php?error-0"); // Erro de sessão
            exit;
        }
    }

    public static function sair() {
        session_destroy();
        header("Location: index.php");
    }

    public static function login($email,$senha) {
        $sql = Conexao::conectar()->prepare("SELECT * FROM usuarios WHERE email = ? AND senha = ?");
        $sql->execute(array($email,$senha));
        if($sql->rowCount() > 0) {
            session_start();
            $data_user = $sql->fetch();
            $_SESSION['email'] = $data_user['email'];
            $_SESSION['id_usuario'] = $data_user['id'];
            header("Location: tarefas.php");
        } else {
            header("Location: index.php?error-1"); // Erri de dados incorretos
        }
    }

    public static function cadastro($email,$nome,$senha) {
        $sql = Conexao::conectar()->prepare("INSERT INTO usuarios SET email = ?, nome = ?, senha = ?");
        $sql->execute(array($email,$nome,$senha));
        if($sql) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['id_usuario'] = $sql->lastInsertId();
            header("Location: tarefas.php");
        }
    }
 
}

?>