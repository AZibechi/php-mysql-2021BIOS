<?php
    // PROCESO CONTROL SESSION
    // acceder a session
    session_start();
    if (!isset($_SESSION["name"])) {
        // enviar mensaje de error
    echo '<script>
    window.alert("Inicie sesión");
    window.location.href="index.php";</script>';
    // header("location: index.php");
}
    // endif
    // controlar cookie
    if (!isset($_COOKIE["login"])) {
        // enviar mensaje de error
    echo '<script>window.alert("Sesión expirada, inicie sesión nuevamente");
    window.location.href="index.php";</script>';
    // header("location: index.php");
} else {
        // crear cookie (resetear contador de tiempo)
        setcookie("login","activo",time()+120);
    } // endif
?>