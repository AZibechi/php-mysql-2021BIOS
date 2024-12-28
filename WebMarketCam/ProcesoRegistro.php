<?php
    // Proceso de registro de un nuevo usuario

    include "conexion.inc";
    // Capturar datos del formulario
    $nombre       = utf8_decode($_POST["NOM"]);
    $usuario      = utf8_decode($_POST["USR"]);
    $contra   = md5(utf8_decode($_POST["CON"])); 
    // Buscar usuario con ese nombre
    $sql = "SELECT * FROM usuarios WHERE Usuario='$usuario'";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // Verificar que no exista ese usuario
    if (mysql_num_rows($result)==0) {
    // Sentencia SQL
    $sql  = "INSERT INTO usuarios ";
    $sql .= "(Usuario,Nombre,Contra) ";
    $sql .= "VALUES ";
    $sql .= "('$usuario','$nombre','$contra')";
    // Depurar
    // die($sql);
    // Ejecutar sentencia
    mysql_query($sql,$conex);
    // Cerrar conexión
    mysql_close($conex);
    } else {
        header("Location: PaginaError.php?MSG=Nombre de usuario existente")
    }
    // Volver al inicio
    header("location: index.php");
?>