<!DOCTYPE html>
<html lang=es>
<head>
	<!-- Controlar Sesión -->
<?php
include "ControlSesion.inc"
?>
<?php
include "head.inc"
?>
	<title>Productos - WebMarketCam</title>
</head>

<body>


<?php
 include "NombreUsuario.inc";
    ?>
<div>
<a href="ingreso.php" ><img src="Imagenes/logo_large.png" class="logo"></a>
</div>
<!-- Incluir botonera -->
<?php include "botonera.inc" 
?>
<!-- Incluir Fromulario para ingresar nuevos productos -->
<?php include "FormNuevoProducto.inc"
?>
<!-- Incluir Formulario para modificar productos -->
<?php include "FormModifProducto.inc"
?>
<!-- Incluir Formulario para dar de baja productos -->
<?php include "FormBajaProducto.inc" ?>
</body>
</html>