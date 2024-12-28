<?php
    // Proceso para añadir nuevo producto

    include "conexion.inc";
    // Capturar datos del formulario
    $marca         = utf8_decode($_POST["MAR"]);
    $descripcion   = utf8_decode($_POST["DES"]);
    $origen        = utf8_decode($_POST["ORI"]);
    $precio        = $_POST["PRE"];       
    $categoria     = $_POST["CAT"]; 
    // Sentencia SQL
    $sql  = "INSERT INTO productos ";
    $sql .= "(idProd,marProd,descProd,origProd,precProd,catProd) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$marca','$descripcion','$origen',$precio,$categoria)";
    // Depurar 
    // die($sql);
    // Ejecutar 
    mysql_query($sql,$conex);
    // Cerrar conexión
    mysql_close($conex);
    // Volver a Productos
    header("location: Productos.php");
?>