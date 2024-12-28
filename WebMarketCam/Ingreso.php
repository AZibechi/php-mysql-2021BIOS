<!DOCTYPE html>
<html lang=es>
<head>
<?php
include "ControlSesion.inc"
?>
	<?php
	include "head.inc"
	?>
	<title>WebMarketCam</title>
</head>

<body>

<?php
 include "NombreUsuario.inc"
    ?>

<div class="divlogo">
<img src="Imagenes/logo_large.png" class="logo">
</div>

	
	<table class="botonera" id="bIngreso">
    <tr>
    <td>
    <img src="Imagenes/4.png" class="imgingreso"> 
    </td>    
    <td>
    <img src="Imagenes/5.png" class="imgingreso"> 
    </td>
    <td>
    <img src="Imagenes/6.png" class="imgingreso"> 
    </td>
    </tr>
    <tr>
        <?php
        include "botonera.inc";
        ?>
    </tr>
</table>
    




</body>
</html>