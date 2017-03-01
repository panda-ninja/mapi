<?php 

	function conectar(){
		$host = "localhost";
		$user = "root";
		$pas = "";
		$db = "vivaperu";
		/*$user = "b2u4b3e3_company";
		$pas = "mcompany_2017";
		$db = "b2u4b3e3_mcompany";*/
		$port = 3306;
		$conexion= new mysqli($host, $user, $pas, $db);
		mysqli_set_charset($conexion,'utf8');
	return $conexion;
	}
?>
