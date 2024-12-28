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

<form id="dataCambio" action="ProcesoCambioContra.php" method="POST" enctype="multipart/form-data">


<table class="login">

<tr>
<td class="titulo" colspan= "2">
    Registrar Nuevo Usuario
</td>
</tr>

<tr>

<td>
Usuario:
</td>

<td class="input">
<input id="Usuario"
       type="text"
       name="USU"
       title="Inserte Usuario"

/>
</td>

</tr>

<tr>

<td>
Contraseña Actual:
</td>

<td class="input">
<input id="ConAct"
       type="password"
       name="COA"
       title="Inserte Contraseña Actual"

/>
</td>

</tr>

<tr>

<td>
Nueva Contraseña:
</td>

<td class="input">
<input id="ConNue"
       type="password"
       name="CON"
       title="Inserte Nueva Contraseña"

/> 
</td>

</tr>

<tr>

<td>
Repetir Nueva Contraseña:
</td>

<td class="input">
<input id="ConNue2"
       type="password"
       name="COR"
       title="Repita Nueva Contraseña"

/> 
</td>

</tr>

<tr>

<td colspan="2" >
<input type="submit" value="Cambiar Contraseña" onclick="CambioContra();" class="boton" />
</td>

</tr>


</table>

</form>




</body>
</html>