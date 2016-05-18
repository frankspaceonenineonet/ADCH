<?php
    include("Configuracion/empresa.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta name="description" content="fresh Gray Bootstrap 3.0 Responsive Theme ">
    <meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap,Bootstrap 3.0 Responsive Theme">
    <meta name="author" content="Mindfreakerstuff">
    <link href="CSS/bootstrap.css" rel="stylesheet">
    <link href="CSS/registro.css" rel="stylesheet">
    <link href="CSS/animate-custom.css" rel="stylesheet">
    <link rel="shortcut icon" href="Logos/iconu3.png" type="image/png">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Intranet | GrupoNu3.com</title>
 </head>
    <body>          
    	<div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-sm-offset-3 col-md-offset-4">		    	 
                    <div class="login-box clearfix animated flipInY">
	        	<div class="login-logo">
                            <img src="Logos/logonu3.png" alt="Company Logo">
			</div> 
                            <hr>
		    	<div class="login-form">            
                            <form name="test" action="registrousuario.php" onsubmit="return comprueba_dominio(test.valida_mail.value)" method="post" autocomplete="off">
                            	<input id="nombre" type="text" name="nombre" placeholder="Nombre Completo" required="required" class="input-field">   
                                <input id="email" type="text" title="Dominios Validos: Nu3/ GrandPet/ Bonnacarne" name=valida_mail placeholder="nombre@empresa" required="required" class="input-field" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.tolowerCase();">
                                <input id="telefono" type="text" name="telefono" maxlength="10" placeholder="000-000-0000" class="input-field" onkeypress="return justNumbers(event);">                                                  
            
            <center><select name="empresa" id="cboEmpresas">
                <option value="0">Seleccione una Empresa</option>
                <?php
                    $empresa = obtenerempresas();
                    foreach ($empresa as $empresa) { 
                        echo '<option value="'.$empresa->id.'">'.utf8_encode($empresa->nombre).'</option>';     
                    }
                ?>
            </select>
            <br>
            <select name="puesto" id="cboPuestos">
                <option>Seleccione un Puesto</option>
            </select></center>                            
                                
            <button type="submit" class="btn btn-login" onclick="return confirm('Tus registros seran analizados por la empresa, si no estas seguro(a) de la veracidad de ellos o crees que algun dato esta erroneo, favor de revisarlos. \n\nGrupo Nu3')"><strong>REGISTRAR</strong></button> 
                            </form>	    
			</div> 			        	
                    </div>
		</div>
            </div>
    	</div>  
         <div class="footer">
         <style type="text/css">
            a
            {
                color: rgb(105, 105, 105);
            }
            a:hover
            {
                color: rgb(105, 105, 105);
                text-decoration: none;
            }
            .btn-link
            {
                color: #ABABAB;
                background-color: transparent;
                border-color: transparent;
                text-decoration: none;
            }
            .btn-link:hover
            {
                color: #FFFFFF;
                background-color: transparent;
                border-color: transparent;
                text-decoration: none;
            }
            select
            {
                color: #A9A9A9;
            }
            </style>
            <a href="Registros/accesoadmin.html" class="btn btn-link glyphicon glyphicon-list-alt"></a>
            <small><strong> | Copyright © 2016 GrupoNu3.com | </strong></small>
            <a href="login.html" class="btn btn-link glyphicon glyphicon-arrow-left"></a>
            </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="JS/jquery.min.js"></script>
        <script src="JS/bootstrap.min.js"></script> 
        <script src="JS/placeholder-shim.min.js"></script>        
        <script src="JS/custom.js"></script>
        <script src="JS/restrictnum.js"></script>
        <script src="JS/empruestos.js"></script>
        <script src="JS/validamail.js"></script>
</body>
</html>