<?php
    // conectar al servidor
    include "conexion.inc";
    // capturar datos del formulario LOGIN
    $id   = $_POST["IDM"];
    // crear sentencia SQL para buscar usuario
        $sql  = "SELECT * FROM productos JOIN categoria ON catProd=idCat WHERE idProd=$id AND estProd=1 ";
    // ejecutar sentencia SQL
    $result = mysql_query($sql,$conex);
    // depurar
    // die($sql);
    // verificar existencia
    if (mysql_num_rows($result)==0) {
    // enviar mensaje de error
    header("Location: PaginaError.php?MSG=ID INEXISTENTE");
    } else {
    // cargar registro
    $dataProd = mysql_fetch_array($result);
    // cargar y convertir datos
    $descripcion  = utf8_encode($dataProd["descProd"]);
    $marca        = utf8_encode($dataProd["marProd"]);
    $origen       = utf8_encode($dataProd["origProd"]);
    $precio       = $dataProd["precProd"];
    $categoria    = utf8_encode($dataProd["nomCat"]);  
    } // endif
    // cerrar conexión
    mysql_close($conex);
?>

<!DOCTYPE html>
<html lang=es>
<head>
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

<a href="ingreso.php" ><img src="Imagenes/logo_large.png" class="logo"></a>
</div>

	<?php
	include "botonera.inc"
    ?>


<form id="dataProcesoBaja" action="ProcesoModifProducto.php" method="POST" enctype="multipart/form-data">
<table class="login" id="baja">
      <tr>
        <th>Modificar Producto:</th>
      </tr>
      <tr>
        <td>Id del producto:</td>
        <td><input id="idProd"
       type="text"
       name="ID"
       readonly
       value="<?php echo($id); ?> " /></td>
      </tr>

      <tr>
      <td>Descripción:</td>
        <td><input id="descProd"
       type="text"
       name="DES"
       value="<?php echo($descripcion); ?> " /></td>

        <td>Marca:</td>
        <td><input id="marProd"
       type="text"
       name="MAR"
       value="<?php echo($marca); ?> " /></td>

        <td>Origen:</td>
        <td><select id="origProd" name="ORI" title="Seleccionar Origen"> 
            <?php echo "<option value='$origen' selected hidden>$origen</option>" ?>     
            <option value="Alemania">Alemania</option>
            <option value="China">China</option>
            <option value="USA">USA</option>
          </select></td>

        <td>Precio:</td>
        <td><input id="precProd"
       type="text"
       name="PRE"
       value="<?php echo($precio); ?> " /></td>

        <td>Categoría:</td>
        <td><select id="catProd" name="CAT" title="Seleccionar Categoría">       
            <?php
                include "SeleccionarCategoria.inc";
            ?> </td>
      </tr> 


      <tr>
        <td colspan="2">
          <input type="submit" value="Modificar" />
          <input type="reset"  value="Cancelar" onclick="header('location: Productos.php');/">
        </td>
      </tr>                        
     </table>


</body>
</html>