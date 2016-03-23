<?php

	function obtenerConexion() {
		$mysqli = new mysqli('localhost', 'root', '', 'adch');

		if($mysqli->connect_errno > 0){
		    die('Imposible conectar a la Base de Datos [' . $mysqli->connect_error . ']');
		}

		return $mysqli;	
	}

	function cerrarConexion($mysqli, $query) {
		$query->free();
		$mysqli->close();
	}

	function ejecutarQuery($mysqli, $sql) {
		if(!$resultado = $mysqli->query($sql)){
		    die('Ocurrio un error al ejectuar la consulta [' . $mysqli->error . ']');
		}

		return $resultado;
	}
        
