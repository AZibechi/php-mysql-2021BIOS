<!DOCTYPE html>
<html lang=es>
<head>
	<?php
	include "head.inc"
	?>
	<title>WebMarketCam</title>
</head>

<body>

<div class="divlogo" id="logoindex">
<img src="Imagenes/logo_large.png" class="logo">
</div>

	<?php
	include "botonera.inc"
    ?>

<form id="dataLOG" action="ProcesoLogin.php" method="POST">

<table class="login">

<tr>
       <th colspan="2" class="titulo"> Inicie Sesión </th>
</tr>

<tr>
<td>
Usuario:
</td>

<td class="input">
<input id="nomUs"
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
<input id="claveUs"
       type="password"
       name="CONT"
       title="Inserte contraseña"

/> 
</td>

</tr>

<tr>

<td colspan="2" class="center">

<input type="submit" value="Entrar" onclick="Login();" class="boton" />
<a href="Registrarse.php"> <input type="button" value="Registrarse" class='boton' /></a>
<a href="CambioContra.php"> <input type="button" value= "Cambiar Contraseña" class='boton' /> </a>
</td>

</tr>

</table>

</form>




</body>
</html>