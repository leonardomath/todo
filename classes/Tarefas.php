<?php

class Tarefas {

	private static $tarefas;

	public static function setTarefa($id_usuario,$nome_tarefa) {
		$sql = Conexao::conectar()->prepare("INSERT INTO tarefas SET id_usuario = ?, nome_tarefa = ?, status = ?");
		$sql->execute(array($id_usuario,$nome_tarefa,0));
		// if($sql) {
		// 	header("Location: tarefas.php?sucess");
		// } else {
		// 	header("Location: tarefas.php?error");
		// }
		if($sql) {
			$retorno = true;
		} else {
			$retorno = false;
		}

		return $retorno;
	}

	public static function getTarefas($id_usuario,$status) {
		$sql = Conexao::conectar()->prepare("SELECT * FROM tarefas WHERE id_usuario = ? AND status = ?");
		$sql->execute(array($id_usuario,$status));
		if($sql->rowCount() > 0) {
			self::$tarefas = $sql->fetchAll();
		} else {
			self::$tarefas = NULL;
		}
		return self::$tarefas;
	}

	public static function updateTarefa($status,$id_tarefa,$id_usuario) {
		$sql = Conexao::conectar()->prepare("UPDATE tarefas SET status = ? WHERE id = ? AND id_usuario = ?");
		$sql->execute(array($status,$id_tarefa,$id_usuario));
		// print_r($sql);
		if($sql)
			header("Location: ".PATH."tarefas");
		else {
			header("Location: ".PATH."tarefas?erro");
		}
	}

	public static function deleteTarefa($id_usuario,$id_tarefa) {
		$sql = Conexao::conectar()->prepare("DELETE FROM tarefas WHERE id_usuario = $id_usuario AND id = $id_tarefa");
		$sql->execute();
		if($sql) {
			$retorno = true;
		} else {
			$retorno = false;
		}

		return $retorno;
	}

}

?>