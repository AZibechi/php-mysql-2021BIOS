<?php
    // Proceso para Modificar Productos

    include "conexion.inc";
    // Capturar datos del formulario
    $id            = $_POST["ID"];
    $marca         = utf8_decode($_POST["MAR"]);
    $descripcion   = utf8_decode($_POST["DES"]);
    $origen        = utf8_decode($_POST["ORI"]);
    $precio        = $_POST["PRE"];       
    $categoria     = $_POST["CAT"]; 
    // Sentencia SQL 
    $sql  = "UPDATE productos SET ";
    $sql .= "marProd='$marca', ";
    $sql .= "descProd='$descripcion', ";
    $sql .= "origProd='$origen', ";
    $sql .= "precProd='$precio', ";
    $sql .= "catProd='$categoria' ";
    $sql .= "WHERE idProd=$id";  
    // Depurar
    // die($sql);
    // Ejecutar
    mysql_query($sql,$conex);
    // Cerrar conexión
    mysql_close($conex);
    // Volver a Productos
    header("location: Productos.php");
?>