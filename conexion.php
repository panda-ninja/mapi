<?php 

	function conectar(){
		$host = "localhost";
		$user = "root";
		$pas = "";
		$db = "vivaperu";
		$port = 3306;
		$conexion= new mysqli($host, $user, $pas, $db);

	return $conexion;
	}
?>