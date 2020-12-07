<?php
    $host = "localhost"; //Dirección de la BB. DD.
    $basededatos = "propietario"; //Nombre de la BB. DD.
    $usuariodb = "root"; //Nombre de usuario de la BB. DD.
    $clavedb = ""; //Clave de usuario de la BB. DD.

    //Lista de tablas
    $tabla_db1 = "propietario"; //tabla de usuarios

    error_reporting(1); //1: muestra error, 0: no muestra error

    $conexion = new mysqli($host, $usuariodb, $clavedb, $basededatos);

    if ($conexion -> connect_errno){
        echo "El sitio presenta problemas. Intente más tarde.";
        exit();
    }
?>