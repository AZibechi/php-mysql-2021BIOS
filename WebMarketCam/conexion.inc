<?php
    // Conectar a la base de datos
    $conex = mysql_connect("localhost","root","");
    // Controlar conexión
    if (!$conex) {
        // Enviar mensaje de error
        header("Location: PaginaError.php?MSG=No se pudo conectar a la base de datos");
    } // endif
    // seleccionar Base de Datos
    $selDB = mysql_select_db("webmarketcam",$conex);
    // controlar seleción de Base de Datos
    if (!$selDB) {
        // enviar mensaje de error
        header("Location: PaginaError.php?MSG=No se pudo seleccionar base de datos");
    } // endif
?>