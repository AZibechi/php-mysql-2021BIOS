<!DOCTYPE html>
<html lang=es>
<head>
	<?php
	include "head.inc"
	?>
	<title>Registrarse - WebMarketCam</title>
</head>

<body>

<div class="divlogo">
<a href="index.php" ><img src="Imagenes/logo_large.png" class="logo"></a>
</div>

<?php
	include "botonera.inc"
    ?>

<!-- Crear formulario con un input para cada cosa -->
<form id="dataREG" action="ProcesoRegistro.php" method="POST"  enctype="multipart/form-data">


<table class="login">

<tr>
<td class="titulo" colspan= "2">
    Registrar Nuevo Usuario
</td>
</tr>

<tr>

<td>
Nombre:
</td>

<td class="input">
<input id="Nombre"
       type="text"
       name="NOM"
       title="Inserte nombre"

/>
</td>

</tr>

<tr>

<td>
Usuario:
</td>

<td class="input">
<input id="Usuario"
       type="text"
       name="USR"
       title="Inserte usuario"

/>
</td>

</tr>

<tr>

<td>
Contraseña:
</td>

<td class="input">
<input id="Contraseña"
       type="password"
       name="CON"
       title="Inserte contraseña"

/> 
</td>

</tr>

<tr>

<td colspan="2" >
<input type="submit" value="Registrarse" class="boton"/>
</td>

</tr>


</table>

</form>




</body>
</html>