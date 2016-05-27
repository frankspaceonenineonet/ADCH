<html>
	<head>
		<title>Intranet | GrupoNu3.com</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="shortcut icon" href="../Logos/iconu3.png" type="image/png">
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
			<center><form name="buscaregistro" method="POST" action="resultbusqueda.php" autocomplete="off">			
			<table>
				<tr>
					<input type="hidden" name="idpersona" value="<?php echo $id; ?>">
					<td><input id="nombre" type="text" name="nombre" placeholder="Buscar por Nombre o Letras" class="input-field"/>
				</td>
				<tr>
					<td colspan="2"><center><input class="btn btn-loginizq" type="submit" name="Buscar" value="Buscar" /></center></td>
				</tr>
				<tr>
					<td colspan="2"><center><button class="btn btn-loginder"><a href="adminpanel.php">CANCELAR</a></button></center></td>
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
        <script src="../JS/empruestos.js"></script>
        <script src="../JS/validamail.js"></script>
	</body>
</html>	
