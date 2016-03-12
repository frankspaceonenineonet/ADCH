<?php

require 'constantes.php';

    $mysqli = new mysqli(BD_SERVER, BD_USER, BD_UP, BD_NAME);

    
    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a la Base de Datos: " . $mysqli->connect_error;
    }
