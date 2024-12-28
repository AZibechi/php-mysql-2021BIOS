<?php 
// conectar al Servidor de Base de Datos
    include "conexion.inc";
    // crear sentencia SQL para cargar todas las categorías
    $sql = "SELECT * FROM categoria ORDER BY nomCat";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // recorrer matríz de resultado
    while ($regCat=mysql_fetch_array($result)) {
        // convertir caracteres
        $id       = $regCat["idCat"];
        $categoria= utf8_encode($regCat["nomCat"]);
        // crear option de la lista
        echo "<option value='$id'>$categoria</option>\n";
    } // end while
    // cerrar conexión
    mysql_close($conex);
?>