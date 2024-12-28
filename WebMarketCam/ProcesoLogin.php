<?php
    // Proceso de Login
    
    include "conexion.inc";
    // Capturar datos del formulario
    $usuario   = utf8_decode($_POST["USR"]);
    $contra   = md5(utf8_decode($_POST["CONT"]));
    // Sentencia SQL 
    $sql = "SELECT * FROM usuarios WHERE Usuario='$usuario' AND Contra='$contra' ";
    // Ejecutar
    $result = mysql_query($sql,$conex);
    // Si no existe nada con ese usuario y contraseña mandar mensaje de error
    if (mysql_num_rows($result)==0) {
        header("Location:PaginaError.php?MSG=Usuario y/o Contraseña Incorrectos");
    } else {
        // Datos del registro del usuario
        $regUSR = mysql_fetch_array($result);
        // Crear sesión con nombre del usuario
        session_start();
        $_SESSION["name"]=$regUSR["Nombre"];
        // Crear cookie
        setcookie("login","activo",time()+60*60);
        // Mandar a página de ingreso
        header("Location: Ingreso.php");
    } // endif
    // cerrar conexión
    mysql_close($conex);
?>