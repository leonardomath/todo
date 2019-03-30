<?php

class Conexao {

	private static $conexao;

	public static function conectar() {
		if(self::$conexao == null) {
			try {
				self::$conexao = new PDO("mysql:dbname=todo;host=localhost","root","");
		 	} catch (PDOException $e) {
				echo "Erro ".$e->getMessage();
			}
		}
		return self::$conexao;
	}
}

?>