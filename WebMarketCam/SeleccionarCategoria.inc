<?php
    // Seleccionar Categoría
    // Lista desplegable con todas las categorías
    // Pre-selecciona la categoría del producto con el ID seleccionado
    
    include "conexion.inc";

    // Sentencia SQL
    $sql  = "SELECT * FROM categoria ";
    // Ejecutar sentencia
    $resultados = mysql_query($sql,$conex);
    // Recorrer matriz
    while ($dataCat=mysql_fetch_array($resultados)) {
        // Crear variables que capturen los datos de las columnas de la tabla
        $idCat  = $dataCat["idCat"];
        $nomCat= utf8_encode($dataCat["nomCat"]);
        // Llamar al producto del id seleccionado
        if ($dataCat["idCat"]==$dataProd["idCat"]) {
            // Pre-seleccionar (con "selected") la categoría del producto en un option
            echo "<option value='$idCat' selected>$nomCat</option>\n";    
        } else {
            // Crear el resto de opciones, con todas las categorías existentes
            echo "<option value='$idCat'>$nomCat</option>\n";            
        } // endif

    } // end while
    // cerrar conexión
    mysql_close($conex);
?>