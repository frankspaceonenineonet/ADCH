<?php 
	
	require('../Configuracion/registro_conex.php');
	
	$id=$_POST['idpersona'];

	$nombre=$_POST['nombre'];

	$email=$_POST['valida_mail'];

	$telefono=$_POST['telefono'];

	$empresa=$_POST['empresa'];

	$puesto=$_POST['puesto'];

	$query="UPDATE personal SET nombre='$nombre', email='$email', telefono='$telefono', idempresa='$empresa', idpuesto='$puesto' WHERE idpersona='$id'";
	
	$resultado=$mysqli->query($query);
	
?>

<html>
	<head>
		<title>Intranet | GrupoNu3.com</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="shortcut icon" href="../Logos/iconu3.png" type="image/png">
		<link href="../CSS/CSS_Registros/navandmodal.css" rel="stylesheet" media="screen">
  		<link href="../CSS/CSS_Registros/bootstrap.css" rel="stylesheet">
  		<link href="../CSS/CSS_Registros/nuevo.css" rel="stylesheet">
  		<link href="../CSS/CSS_Registros/modificar.css" rel="stylesheet">
	</head>
	
	<body>
	<nav class="navbar navbar-inverse" data-spy="affix">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#"><img src="../Logos/logonu3.png" width="60" height="35"></a></li>
    <li><a href="http://gruponu3.com" class="btn btn-link glyphicon glyphicon-home" title="GrupoNu3.com"></a></li>
    <!--<li><a href="http://gruponu3.com">GrupoNu3.com</a></li>-->
    <li><a href="#" class="btn btn-link glyphicon glyphicon-tasks" title="Estadisticas"></a></li>
    <!--<li><a href="#">Estadisticas</a></li>-->
    <li><a href="../login.html" class="btn btn-link glyphicon glyphicon-user" title="Inicio de Sesión"></a></li>
    <!--<li><a href="../login.html">Login</a></li>-->
    <li><a href="#" class="btn btn-link glyphicon glyphicon-folder-close" title="Plataforma de Archivos"></a></li>
    <!--<li><a href="#">Plataforma de Archivos</a></li>-->
    <li><a href="../principal.html" class="btn btn-link glyphicon glyphicon-list-alt" title="Capacitaciones"></a></li>
    <!--<li><a href="../principal.html">Capacitaciones</a></li>-->
    <li><a href="#" class="btn btn-link glyphicon glyphicon-flag" title="Noticias"></a></li>
    <!--<li><a href="#">Noticias</a></li>-->
  </ul>
</nav>

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
		.alert-danger
		{
			width: 95%;
		}
		</style>		
		<center>
			
			<?php 
				if($resultado>0){
				?>
				
				<div class="alert alert-success">
  				<strong>¡Registro Modificado!</strong>
  				<br>
  				<a href="adminpanel.php"><strong>REGRESAR</strong><style type="text/css">
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
				
					<?php 	}else{ ?>
				
				<div class="alert alert-danger">
  				<strong>¡Error al Modificar el Registro!</strong>
  				<br>
  				<a href="adminpanel.php"><strong>REGRESAR</strong><style type="text/css">
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
				
				