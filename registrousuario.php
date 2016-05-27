<?php 
	
	require('Configuracion/registro_conex.php');
	
	$nombre=$_POST['nombre'];

	$email=$_POST['valida_mail'];

	$telefono=$_POST['telefono'];

	$empresa=$_POST['empresa'];

	$puesto=$_POST['puesto'];
	
	$query="INSERT INTO personal (nombre, email, telefono, idempresa, idpuesto) VALUES ('$nombre','$email','$telefono','$empresa','$puesto')";

	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<link rel="shortcut icon" href="Logos/iconu3.png" type="image/png">
		<title>Intranet | GrupoNu3.com</title>
  		<link href="CSS/CSS_Registros/bootstrap.css" rel="stylesheet">
  		<link href="CSS/CSS_Registros/nuevo.css" rel="stylesheet">
	</head>
	<body>

<div class="container-fluid" style="height:1000px">

<style type="text/css">
		table{
			border-color: transparent;
		}

		.glyphicon{
			position: static;
		}
		.navbar
		{
			border-radius: 0px;
		}
		.alert-success
		{
			width: 95%;
		}
		</style>	
		<center>	
			
			<?php if($resultado>0){ ?>

				<div class="alert alert-success">
  				<strong>¡Registro Agregado!</strong>
  				<br>
  				<a href="login.html"><strong>REGRESAR</strong><style type="text/css">
  				a{
  					color: rgba(156, 0, 0, 0.73);
  					text-decoration: none;
  				}
  				a:hover{
					text-decoration: none;
					color: rgba(0, 0, 0, 0.73);
  					}
  					</style></a>
				</div>

				<?php }else{ ?>
				
				<div class="alert alert-danger">
  				<strong>¡Error al Agregar el Registro!</strong>
  				<br>
  				<a href="login.html"><strong>REGRESAR</strong><style type="text/css">
  				a{
  					color: rgba(156, 0, 0, 0.73);
  					text-decoration: none;
  				}
  				a:hover{
					text-decoration: none;
					color: rgba(0, 0, 0, 0.73);
  					}
  					</style></a>
				</div>

			<?php	} ?>		
			
		</center>
	</body>
	</html>	