<?php
    $servidor="127.0.0.1";
    $usuario="root";
    $clave="";
    $baseDeDatos="farmacia";


    $enlace = mysqli_connect($servidor, $usuario,$clave,$baseDeDatos);
    if(!$enlace){
        echo"Error en la conexion con el servidor";
    }
?>