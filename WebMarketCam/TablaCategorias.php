<!DOCTYPE html>
<html lang=es>
<head>
<?php
include "ControlSesion.inc"
?>
<?php
include "head.inc"
?>
	<title>Consultas - WebMarketCam</title>
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

<div class="Consultas">Categorías existentes:</div>

<div>
<table class="tabcat">

            <?php
             // conectar al Servidor de Base de Datos
                 include "conexion.inc";

                    // determinar orden
                    if (isset($_GET["ORD"])) {
                     // capturar orden desde el listado
                     $orden = $_GET["ORD"];    
                 } else {
                     // establecer orden por defecto (viene desde el formulario)
                     $orden = "idCat";
                 } // endif
                 // crear sentencia SQL para cargar todas las categorías
                 $sql = "SELECT * FROM categoria ORDER BY $orden";
                 // depurar
                 // die($sql);
                 // ejecutar sentencia SQL
                 $result = mysql_query($sql,$conex);
                 if (mysql_num_rows($result)==0) {
                     // enviar mensaje de error
                     header("Location: PaginaError.php?MSG=Aún no existen los registros solicitados");
                 } // endif
                
                 echo "
                 <th>
                 Id:
                 <a href='TablaCategorias.php?ORD=idCat'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
                 <a href='TablaCategorias.php?ORD=idCat DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               <th>
               Categoría:
               <a href='TablaCategorias.php?ORD=nomCat'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
               <a href='TablaCategorias.php?ORD=nomCat DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               </th>\n";
                 // recorrer matríz de resultado
                 while ($regCat=mysql_fetch_array($result)) {
                     // convertir caracteres
                     $id       = $regCat["idCat"];
                     $categoria= utf8_encode($regCat["nomCat"]);
                     // crear option de la lista
                   echo "<tr> <td> $id </td> <td> $categoria </td> </tr>";
                 } // end while
                 // cerrar conexión
                 mysql_close($conex);
                
            ?>                       
                    
     </table> 
</div>


</body>
</html>
