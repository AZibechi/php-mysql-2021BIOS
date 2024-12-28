<?php
    // PROCESO de cambio de contraseña
    
    include "conexion.inc";
    // Capturar datos del formulario
    $usuario   = utf8_decode($_POST["USU"]);
    $contraAct   = md5(utf8_decode($_POST["COA"]));
    $contraNue   = md5(utf8_decode($_POST["CON"]));
        // Sentencia SQL
        $sql = "SELECT * FROM usuarios WHERE Usuario='$usuario' AND Contra='$contraAct' ";
        // depurar 
        // die($sql);
        // ejecutar
        $result = mysql_query($sql,$conex);
    // Si no existe nada con ese usuario y contraseña mandar mensaje de error
        if (mysql_num_rows($result)==0) {
            header("Location:PaginaError.php?MSG=Usuario y/o Contraseña Incorrectos");
        } else {
    // Sentencia SQL acutalizando la contraseña
    $sql = "UPDATE usuarios SET Contra='$contraNue' WHERE Usuario='$usuario' AND Contra='$contraAct' ";
        }
    // Depurar
    // die($sql);
    // Ejecutar
    mysql_query($sql,$conex);
    // Cerrar conexión
    mysql_close($conex);
    // Volver al inicio
    header("location: index.php");
?>

