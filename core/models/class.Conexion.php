<?php

class Conexion extends mysqli{
	public function __construct(){
		parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		$this->connect_errno ? die('Erro ao conectar') : null;
		$this->set_charset("utf-8");

	}

	public function rows($query){
		return mysqli_num_rows($query);

	}

	public function liberar($query){
		return mysqli_free_result($query);
	}

	public function recorrer($query){
		return mysqli_fetch_array($query);
	}
}

?>