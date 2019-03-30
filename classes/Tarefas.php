<?php

class Tarefas {

	public static function setTarefa($id_usuario,$nome) {
		$sql = Conexao::conectar()->prepare("INSERT INTO tarefas SET nome = ?");
		$sql->execute(array($nome));
		if($sql) {
			header("Location: tarefas.php?sucess");
		} else {
			header("Location: tarefas.php?error");
		}
	}

}

?>