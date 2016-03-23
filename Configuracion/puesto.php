<?php
	include("adch_conex.php");
	
	if(isset($_POST['idEmpresa'])) {
		$puestos = array();
		$sql = "SELECT idpuesto, nombre 
				FROM puestos 
				WHERE idempresa = ".$_POST['idEmpresa']; 

		$mysqli = obtenerConexion();
		$result = ejecutarQuery($mysqli, $sql);

		while($row = $result->fetch_assoc()){
			$puesto = new puesto($row['idpuesto'], $row['nombre']);
		    array_push($puestos, $puesto);
		}

		cerrarConexion($mysqli, $result);

		echo json_encode($puestos);
	}
	
	class puesto {
		public $id;
		public $nombre;

		function __construct($id, $nombre) {
			$this->id = $id;
			$this->nombre = $nombre;
		}
	}
?>