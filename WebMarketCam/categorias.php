<!DOCTYPE html>
<html lang=es>
<head>
<?php
include "ControlSesion.inc"
?>
<?php
include "head.inc"
?>
	<title>Categorías - WebMarketCam</title>
</head>

<body>

<?php
 include "NombreUsuario.inc";
    ?>

<a href="ingreso.php" ><img src="Imagenes/logo_large.png" class="logo"></a>
</div>

	<?php
	include "botonera.inc"
    ?>

<form id="NuevaCategoria" action="ProcesoNuevaCat.php" method="POST" enctype="multipart/form-data">
     <table class="login">
      <tr>
        <th colspan="2" class="titulo">Agregar Nueva Categoría:</th>
      </tr>
      <tr>
        <td>Nombre de la Categoría:</td>
        <td class="input">
        <input id="NomCat"
       type="text"
       name="NOC"
       title="Inserte Nombre de la Categoría"
       />
        </td>
      </tr>
      
      <tr>
        <td colspan="2">
          <input type="submit" value="Añadir Categoría" onclick="CheckCat()" class="boton"/>
          <input type="reset"  value="Cancelar" class="boton" />
        </td>
      </tr>                        
     </table>
    </form>

    <form id="ModifCategoria" action="ProcesoModifCat.php" method="POST">
     <table class="login">
      <tr>
        <th class="titulo">Modificar Categoría:</th>
      </tr>
      <tr>
        <td>Seleccione Categoría:</td>
        <td class="input">
        <select id="CatSel" name="CAS" title="Seleccionar Categoría">
            <option value="0">Seleccione Categoría</option>       
            <?php
                include "CargarCategorias.inc";
            ?>                            
          </select></td>
        </td>
      </tr>
      <tr>
        <td>Nuevo Nombre de la Categoría:</td>
        <td class="input">
        <input id="NueNom"
       type="text"
       name="NUN"
       title="Inserte Nuevo Nombre"
       />
        </td>
      </tr>
      
      <tr>
        <td colspan="2">
          <input type="submit" value="Añadir Categoría" onclick="CheckModifCat()" class="boton" />
          <input type="reset"  value="Cancelar" class="boton" />
        </td>
      </tr>                        
     </table>
    </form>

</body>
</html>