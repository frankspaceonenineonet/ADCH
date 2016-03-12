<?php

function opciones($tabla,$valor,$etiqueta,$selecionado)
{
          require 'adch_conex.php';
          
          $consulta =  "SELECT $valor AS valor, $etiqueta AS etiqueta FROM $tabla";
          if( $res = $mysqli->query($consulta))
          {
             while($data = $res->fetch_assoc()) 
                 { 
                          if($data['valor'] == $selecionado) $select = "selected";  else  $select=" ";
                          
                          $opciones .="<option value='".$data['valor']."'  $select>".$data['etiqueta']."</option>"; 
                 } mysqli_free_result($res);
           
       
          }  else  $opciones = 'Ocurrio un error al generar el combo';
    
    return  $opciones;
}