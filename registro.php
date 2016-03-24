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
    <link href="CSS/Chosen/chosen.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="Logos/iconu3.png" type="image/png">
    <title>Intranet | GrupoNu3.com</title>
    <script src="JS/custom.modernizr.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
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
                            <form name="test" onsubmit="return comprueba_dominio(test.valida_nombre.value)" action="login.html" method="post" autocomplete="off">
                            	<input id="nombre" type="text" name="nombre" placeholder="Nombre Completo" required="" class="input-field">   
                                <input id="email" type="text" name=valida_nombre placeholder="nombre@nu3.com.mx" required="" class="input-field" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.tolowerCase();">
                                <input id="telefono" type="text" name="telefono" placeholder="000-000-0000" class="input-field" required="" onkeypress="return justNumbers(event);">                                                  
            
            <select id="cboEmpresas">
                <option value="0">Seleccione una Empresa</option>
                <?php
                    $paises = obtenerempresas();
                    foreach ($paises as $empresa) { 
                        echo '<option value="'.$empresa->id.'">'.utf8_encode($empresa->nombre).'</option>';     
                    }
                ?>
            </select>
            
            <select id="cboPuestos">
                <option value="0">Seleccione un Puesto</option>
            </select>                               
                                
            <button type="submit" class="btn btn-login"><strong>REGISTRAR</strong></button> 
                            </form>	
			</div> 			        	
                    </div>
		</div>
            </div>
    	</div>  
         <div class="footer">
              <p><a href="http://gruponu3.com"><small><font color="#a80306" id="footer-text"><strong>Pagina Principal</strong></font></small></a><small><strong> | Copyright © 2016 | GrupoNu3.com | </strong></small><a href="login.html"><small><font color="#a80306" id="footer-text"><strong>Regresar</strong></font></small></a></p>
         </div>

        <script src="JS/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script> 
        <script src="JS/bootstrap.min.js"></script> 
        <script src="JS/placeholder-shim.min.js"></script>        
        <script src="JS/custom.js"></script>
        <script src="JS/restrictnum.js"></script>
        <script src="JS/empruestos.js"></script>
        <script src="JS/validamail.js"></script>
        <script src="JS/Chosen/chosen.jquery.js" type="text/javascript"></script>
        <script>$("#idempresa").chosen(); /*dar formato de b?squeda al combo*/</script>
</body>
</html>