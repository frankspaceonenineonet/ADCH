<?php
	require('../Configuracion/registro_conex.php');

	$nombre = $_POST['nombre'];
	
	$query="SELECT idpersona, nombre, email, telefono, idempresa, idpuesto, fecha FROM personal WHERE nombre LIKE '%$nombre%'";
	
	$resultado=$mysqli->query($query);

	$rows = $resultado->num_rows;
	
	include("../Configuracion/empresa.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Intranet | GrupoNu3.com</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../Logos/iconu3.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../JS/JS Registros/jquery-1.6.2.min.js"></script>
  <script type="text/javascript" src="../JS/JS Registros/jquery-ui-1.8.16.custom.min.js"></script>
  <link href="../CSS/CSS_Registros/jquery-ui-1.8.16.custom.css" rel="stylesheet" media="screen">
  <link href="../CSS/CSS_Registros/navandmodal.css" rel="stylesheet" media="screen">
  <link href="../CSS/CSS_Registros/bootstrap.css" rel="stylesheet">
  <link href="../CSS/CSS_Registros/nuevo.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-inverse" data-spy="affix">
  <ul class="nav navbar-nav">
    <li class="active"><a href="#"><img src="../Logos/logonu3.png" width="60" height="35"></a></li>
    <li><a href="http://gruponu3.com" class="btn btn-link glyphicon glyphicon-home" title="GrupoNu3.com"></a></li>
    <!--<li><a href="http://gruponu3.com">GrupoNu3.com</a></li>-->
    <li><a href="https://docs.google.com/spreadsheets/d/1Et9KJDjL47YZYHzew8hYF5WtYPzSCzr9u8LtmAAIaIo/edit#gid=2003473687" class="btn btn-link glyphicon glyphicon-tasks" title="Estadisticas"></a></li>
    <!--<li><a href="#">Estadisticas</a></li>-->
    <li><a href="../login.html" class="btn btn-link glyphicon glyphicon-user" title="Inicio de Sesión"></a></li>
    <!--<li><a href="../login.html">Login</a></li>-->
    <!--<li><a href="#" class="btn btn-link glyphicon glyphicon-folder-close" title="Plataforma de Archivos"></a></li>-->
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
		.alert-danger
		{
			width: 95%;
		}
		</style>		
		
	<br><div class="container-fluid" style="height:1000px">
		<center>
		<?php if($rows > 0) { ?>
		<table border=1 width="80%">
			<thead>
				<tr>
					<td><div id="dialogo" title="Nuevo Registro" style="display:none;">
		<table width="50%">
		<form name="test" action="guardaregistro.php" onsubmit="return comprueba_dominio(test.valida_mail.value)" method="post" autocomplete="off">
                            	<input id="nombre" type="text" name="nombre" placeholder="Nombre Completo" required="required" class="input-field">   
                                <input id="email" type="text" title="Dominios Validos: Nu3/ GrandPet/ Bonnacarne" name=valida_mail placeholder="nombre@empresa" required="required" class="input-field" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.tolowerCase();">
                                <input id="telefono" type="text" name="telefono" maxlength="10" placeholder="000-000-0000" class="input-field" onkeypress="return justNumbers(event);">                                                  
            
            <select name="empresa" id="cboEmpresas">
                <option value="0">Seleccione una Empresa</option>
                <?php
                    $empresa = obtenerempresas();
                    foreach ($empresa as $empresa) { 
                        echo '<option value="'.$empresa->id.'">'.utf8_encode($empresa->nombre).'</option>';     
                    }
                ?>
            </select>
            
            <select name"puesto" id="cboPuestos">
                <option value="0">Seleccione un Puesto</option>
            </select>   

                 <br>               
            <button type="submit" class="btn btn-login" onclick="return confirm('Tus registros seran analizados por la empresa, si no estas seguro(a) de la veracidad de ellos, favor de revisarlos.')"><strong>REGISTRAR</strong></button> 
                            </form>
</table>
						</div>
					<div class="wraper">
						<div class="informacion">
						<a href="adminpanel.php" class="btn btn-success glyphicon glyphicon-th-list" title="Panel de Registros"></a>
						</div>
					</div>
					<td><b>Id</b></td>
					<td><b>Nombre Completo</b></td>
					<td><b>Email</b></td>
					<td><b>Teléfono</b></td>
					<td><b>Empresa</b></td>
					<td><b>Puesto</b></td>
					<td><b>Fecha</b></td>
					<td><center><a href="buscar.php" class="btn btn-success glyphicon glyphicon-search" title="Busqueda de Registros"></a></center></td>
					<td></td>
				</tr>
				<tbody>
					<?php while($row=$resultado->fetch_assoc()){ ?>
						<tr>
							<td>
							<center><a href="modificar.php?idpersona=<?php echo $row['idpersona'];?>"><button type="button" class="btn btn-warning glyphicon glyphicon-pencil" title="Editar Registro"></button></a></center>
							</td>
							<td>
								<?php echo $row['idpersona'];?>
							</td>
							<td>
								<?php echo $row['nombre'];?>
							</td>
							<td>
								<?php echo $row['email'];?>
							</td>
							<td>
								<?php echo $row['telefono'];?>
							</td>
							<td>
								<?php echo $row['idempresa'];?>
							</td>
							<td>
								<?php echo $row['idpuesto'];?>
							</td>
							<td>
								<?php echo $row['fecha'];?>
							</td>
							<td>
								<center><a href="eliminar.php?idpersona=<?php echo $row['idpersona'];?>"><button type="button" class="btn btn-danger glyphicon glyphicon-trash" title="Eliminar Registro" onclick="return confirm('¿Estas seguro(a) que deseas eliminar este registro?. \n\nGrupo Nu3')"></button></a></center>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php } else { ?>
				<div class="alert alert-danger">
  				<strong>¡No existen registros!</strong>
  				<br>
  				<a href="buscar.php"><strong>REGRESAR</strong><style type="text/css">
  				a{
  					color: rgba(156, 0, 0, 0.73);
  				}
  				a:hover{
					color: rgba(0, 0, 0, 0.73);
  					}
  					</style></a>
				</div>
				<?php } ?>
		</div>

		<script type="text/javascript">
		$(document).ready(function(){
			
			// Damos formato a la Ventana de Diálogo	
			$('#dialogo').dialog({
				// Indica si la ventana se abre de forma automática
				autoOpen: false,
				// Indica si la ventana es modal
				modal: true,
				// Largo
				width: 307,
				// Alto
				height: 452,
				// Creamos los botones
					buttons: {
						Cerrar: function() {
							// Cerrar ventana de diálogo
							$(this).dialog( "close" );
						}
						
					}
			});
			
			// Mostrar Diálogo Sencillo
			$('#dialogSencillo').click(function(){
				$('#dialogo').dialog('open');
			});
			
		});
		</script>
        <script src="../JS/placeholder-shim.min.js"></script>  
        <script src="../JS/restrictnum.js"></script>
        <script src="../JS/empruestos.js"></script>
        <script src="../JS/validamail.js"></script>
</body>
</html>
