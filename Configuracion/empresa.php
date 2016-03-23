<?php
	include("adch_conex.php");

	function obtenerempresas() {
		$empresas = array();
		$sql = "SELECT idempresa, nombre 
			    FROM empresas"; 

		$mysqli = obtenerConexion();
		$result = ejecutarQuery($mysqli, $sql);

		while($row = $result->fetch_assoc()){
			$empresa = new empresa($row['idempresa'], $row['nombre']);
		    array_push($empresas, $empresa);
		}

		cerrarConexion($mysqli, $result);

		return $empresas;
	}

	class empresa {
		public $id;
		public $nombre;

		function __construct($id, $nombre) {
			$this->id = $id;
			$this->nombre = $nombre;
		}
	}
?>