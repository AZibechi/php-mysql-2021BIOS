<?php
    //Proceso para hacer la baja lógica de productos

    include "conexion.inc";
    // Capturar datos del formulario
    $id        = $_POST["IDB"];         
    // Sentencia SQL
    $sql  = "UPDATE productos SET ";
    $sql .= "estProd = 0 ";
    $sql .= "WHERE ";
    $sql .= "idProd=$id";
    // Depurar
    // die($sql);
    // Ejecutar 
    mysql_query($sql,$conex);
    // Cerrar conexión
    mysql_close($conex);
    // Volver a Productos
    header("location: Productos.php");
?>