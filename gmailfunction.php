<?php
	require('Configuracion/adch_conex.php');
	$consulta = "SELECT idpersona FROM personal WHERE email = '$_POST[email]'";
	/*print($consulta);*/
	$mysqli = obtenerConexion();
	$resultado = $mysqli->query($consulta);

	$data = $resultado->fetch_assoc();
	print $data['idpersona'];