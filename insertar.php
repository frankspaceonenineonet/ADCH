<?
$conexion=mysql_connect("mysql7.000webhost.com","a1169527_yo","123456abc")
        or die("No se pudo Conectar");

?>        

<!DOCTYPE html>
<html lang="es">

<head>
	 <meta charset="UTF-8">
	 <title>Registro</title>
     <link rel="stylesheet" type="text/css" href="css/formulario1.css" />
     <link rel="stylesheet" type="text/css" href="css/index.css" />
</head>

<body bgcolor="#A00002">
   
<div class="container">
        <header>
            <center><h1>Intranet Grupo Nu3</h1><br></center>
        </header>
       
<section>
                <center><a href="entrar.html">
                Regresar
                </a>
                </center>
           <br>
           <br>
             <?
             mysql_select_db("a1169527_regis")
                or die("<h2><span>No se pudo Seleccionar</span></h2>");
             $query = "SELECT * FROM usuarios";
    $resul = mysql_query($query,$conexion);
    $total = mysql_num_rows($resul);
    $fin = $total + 1;

    mysql_query("Insert into usuarios 
        values ($fin,'$_REQUEST[inname]','$_REQUEST[inuser]','$_REQUEST[inpass]','$_REQUEST[inmail]')", 
                $conexion) or die ("<h2><span>No tienes permiso para insertar.<br> 
                Ponte con contacto con el administrador.</h2></span>");

    echo("<h1><span><center>¡ENHORA BUENA, USTED SE A REGISTRADO CORRECTAMENTE!.</center></span></h1>");

    mysql_close($conexion);
?>
</section>
    
</div>

</body>