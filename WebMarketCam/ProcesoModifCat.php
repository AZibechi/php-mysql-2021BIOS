<?php
    // Proceso para Modificar Categorías

    include "conexion.inc";
    // Capturar datos del formulario
    $NueCat         = utf8_decode($_POST["NUN"]);
    $CatSel         = $_POST["CAS"];
    // Sentencia SQL
    $sql  = "UPDATE categoria SET ";
    $sql .= "nomCat='$NueCat' ";
    $sql .= "WHERE idCat= $CatSel";  
    // Depurar
    // die($sql);
    // Ejecutar
    mysql_query($sql,$conex);
    // Cerrar conexión
    mysql_close($conex);
    // Volver a categorias
    header("location: categorias.php");
?>