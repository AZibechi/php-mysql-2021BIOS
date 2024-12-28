<?php
    // Proceso para añadir nueva categoría

    include "conexion.inc";
    // Capturar datos del formulario
    $NueCat       = utf8_decode($_POST["NOC"]);
    // Sentencia SQL
    $sql  = "INSERT INTO categoria (idCat,nomCat) VALUES ('','$NueCat')";
    // Depurar 
    // die($sql);
    // Ejecutar
    mysql_query($sql,$conex);
    // Cerrar conexión
    mysql_close($conex);
    // Volver al inicio
    header("location: categorias.php");
?>