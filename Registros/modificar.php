<?php
	
	require('../Configuracion/registro_conex.php');
	
	$id=$_GET['idpersona'];
	
	$query="SELECT nombre, email, telefono, idempresa, idpuesto FROM personal WHERE idpersona='$id'";
	
	$resultado=$mysqli->query($query);
	
	$row=$resultado->fetch_assoc();
	
	include("../Configuracion/empresa.php");
?>
<html>
	<head>
		<title>Intranet | GrupoNu3.com</title>
		<link rel="shortcut icon" href="../Logos/iconu3.png" type="image/png">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	    <link href="../CSS/CSS_Registros/bootstrap.css" rel="stylesheet">
	    <link href="../CSS/CSS_Registros/modificar.css" rel="stylesheet">
	    <link href="../CSS/CSS_Registros/animate-custom.css" rel="stylesheet">
	    <link href="../CSS/CSS_Registros/navandmodal.css" rel="stylesheet" media="screen">
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
		</style>	
	
		    	<div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">		    	 
                    <div class="login-box clearfix animated flipInY">
	        	<div class="login-logo">
                            <img src="../Logos/logonu3.png" alt="Company Logo" width="100px">
			</div> 
                            <hr>
		    	<div class="login-form"> 
			<center><form name="test" method="POST" onsubmit="return comprueba_dominio(test.valida_mail.value)" action="modregistro.php" autocomplete="off">			
			<table>
				<tr>
					<input type="hidden" name="idpersona" value="<?php echo $id; ?>">
					<td><input id="nombre" type="text" name="nombre" placeholder="Nombre Completo" required="required" class="input-field" value="<?php echo $row['nombre']; ?>" /></td>
				</tr>
				<tr>
					<td><input id="email" type="text" title="Dominios Validos: Nu3/ GrandPet/ Bonnacarne" name=valida_mail placeholder="nombre@empresa" required="required" class="input-field" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.tolowerCase();" value="<?php echo $row['email']; ?>" /></td>
				</tr>
				<tr>
					<td><input id="telefono" type="text" name="telefono" maxlength="10" placeholder="000-000-0000" class="input-field" onkeypress="return justNumbers(event);" value="<?php echo $row['telefono']; ?>" /></td>
				</tr>
				<tr>
					<td><select name="empresa" id="cboEmpresas" value>
                <option><?php echo $row['idempresa']; ?></option>
                <?php
                    $empresa = obtenerempresas();
                    foreach ($empresa as $empresa) { 
                        echo '<option value="'.$empresa->id.'">'.utf8_encode($empresa->nombre).'</option>';     
                    }
                ?>
            </select></td>
				</tr>
				<tr>
					<td><select name="puesto" id="cboPuestos">
                <option><?php echo $row['idpuesto']; ?></option>
            </select> </td>
				</tr>
				<tr>
					<td colspan="2"><center><input class="btn btn-loginizq" type="submit" name="Guardar" value="Guardar"></center></td>
				</tr>
				<tr>
					<td colspan="2"><center><a href="adminpanel.php" class="btn btn-loginder"><h5>Cancelar</h5></a></center></td>
				</tr>				
			</table>
		</form>
			</center>
</div> 			        	
                    </div>
		</div>
            </div>
    	</div> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="../JS/placeholder-shim.min.js"></script>  
        <script src="../JS/restrictnum.js"></script>
        <script src="../JS/empruestospanel.js"></script>
        <script src="../JS/validamail.js"></script>
	</body>
</html>	
