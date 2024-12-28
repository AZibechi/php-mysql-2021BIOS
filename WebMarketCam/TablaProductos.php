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

<div>


            <?php
             // conectar al Servidor de Base de Datos
                 include "conexion.inc";

                             // CAPTURAR FILTROS
            // Capturar filtro de Origen
            if (isset($_GET["ORI"])) {
                $OrigFil = $_GET["ORI"];    
            } else {
                // Dejar variable vacía
                $OrigFil = "";
            }
            // Capturar filtro de Categoría
            if (isset($_GET["CAT"])) {
                $CatFil = $_GET["CAT"];    
            } else {
                // Dejar variable vacía
                $CatFil = "";
            }

            // Capturar filtro de Incluir Dados de Baja
            if (isset($_GET["IDB"])) {
                $IncBaja = $_GET["IDB"];    
            } else {
                // Dejar variable vacía
                $IncBaja = "0";
            }

            // Si NO hay filtro de Origen, dejar vacío, sino preparar sentencia SQL
            if($OrigFil=="" || $OrigFil=="0") {
                $OrigFilSent= "";
            } else {
                $OrigFilSent = "AND origProd = '$OrigFil'";
            }

            // Si NO hay filtro de Categoría, dejar vacio, sino preparar sentencia SQL
            if($CatFil=="" || $CatFil=="0") {
                $CatFilSent="";
                } else {
                $CatFilSent = "AND catProd = '$CatFil'";
                }
            
            // Si se pide que se incluya a los dados de baja, la variable queda vacía
            // Si NO se pide que se incluya a los dados de baja, solo se llama a los dados de alta
            if($IncBaja!=="" || $IncBaja!=="0") {
                $IncBajaSent = "";
                } else { $IncBajaSent = "AND estProd = 1";
                }

            // Sentencia SQL
            $filtro = "WHERE 1 $OrigFilSent $CatFilSent $IncBajaSent";
            $filtroLink = "ORI=$OrigFil&CAT=$CatFil&MDB=$IncBaja";
 
                    // determinar orden
                    if (isset($_GET["ORD"])) {
                     // capturar orden desde el listado
                     $orden = $_GET["ORD"];    
                 } else {
                     // establecer orden por defecto (viene desde el formulario)
                     $orden = "idProd";
                 } // endif
                 // crear sentencia SQL para cargar todas las categorías
                 $sql = "SELECT * FROM productos JOIN categoria ON catProd=idCat $filtro ORDER BY $orden";
                 // depurar
                 // die($sql);
                 // ejecutar sentencia SQL
                 $result = mysql_query($sql,$conex);
                 if (mysql_num_rows($result)==0) {
                     // enviar mensaje de error
                     header("Location: PaginaError.php?MSG=Aún no existen los registros solicitados");
                 } // endif
                 echo "
                 <form id='filtro' action='TablaProductos.php' method='GET' enctype='multipart/form-data'>
                 <table class='tabfil'>
                 <tr>
                 <th>Filtrar por:</th>
                 <th>Origen</th>
                 <th>Categoría</th>
                 <th>Mostrar dados de baja</th>
                 </tr>
                 <tr>
                 <td></td>
                 <td><select id='origProdFiltro' name='ORI' title='Seleccionar Origen'> 
                 <option value='' selected hidden>Seleccione Origen</option>     
                 <option value='Alemania'>Alemania</option>
                 <option value='China'>China</option>
                 <option value='USA'>USA</option>
               </select></td>
                 <td><select id='catProdFiltro' name='CAT' title='Seleccionar Categoría'>
                 <option value='0'>Seleccione Categoría</option>  "; 
                 $sqla = 'SELECT * FROM categoria ORDER BY nomCat';
                 $resultSelect = mysql_query($sqla,$conex);
                 while ($regCat= mysql_fetch_array($resultSelect)) {
                     $idSelect       = $regCat['idCat'];
                     $categoriaSelect= utf8_encode($regCat['nomCat']);
                    
                 echo "<option value='$idSelect'>$categoriaSelect</option>\n"; }
                 echo "</td><td class='inputfil'><input type='checkbox' id='mosDadBaj' name='MDB' title='Mostrar dados de baja'>
                 <input type='submit' value='Filtrar' onclick='CheckModificar()' class='boton' /></td>
                 </table>
                 </form>
                 <table class='tabfil'>
                 <th>
                 Id:
                 <a href='TablaProductos.php?$filtroLink&ORD=idProd'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
                 <a href='TablaProductos.php?$filtroLink&ORD=idProd DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               <th>
               Descripción:
               <a href='TablaProductos.php?$filtroLink&ORD=descProd'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
               <a href='TablaProductos.php?$filtroLink&ORD=descProd DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               <th>
               Marca:
               <a href='TablaProductos.php?$filtroLink&ORD=marProd'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
               <a href='TablaProductos.php?$filtroLink&ORD=marProd DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               <th>
               Origen:
               <a href='TablaProductos.php?$filtroLink&ORD=origProd'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
               <a href='TablaProductos.php?$filtroLink&ORD=origProd DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               <th>
               Precio:
               <a href='TablaProductos.php?$filtroLink&ORD=precProd'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
               <a href='TablaProductos.php?$filtroLink&ORD=precProd DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               <th>
               Categoría:
               <a href='TablaProductos.php?$filtroLink&ORD=catProd'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
               <a href='TablaProductos.php?$filtroLink&ORD=catProd DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               <th>
               Estado:
               <a href='TablaProductos.php?$filtroLink&ORD=estProd'><img src='Imagenes/FlechaAbajo.png' width='15' height='15'></a>
               <a href='TablaProductos.php?$filtroLink&ORD=estProd DESC'><img src='Imagenes/FlechaArriba.png' width='15' height='15'></a>
               </th>
               \n";
                 // recorrer matríz de resultado
                 while ($regProd=mysql_fetch_array($result)) {
                     // convertir caracteres
                     $id            = $regProd["idProd"];
                     $descripcion   = utf8_encode($regProd["descProd"]);
                     $marca         = utf8_encode($regProd["marProd"]);
                     $origen        = utf8_encode($regProd["origProd"]);
                     $precio        = $regProd["precProd"];      
                     $categoria     = utf8_encode($regProd["nomCat"]);
                     $estado        = $regProd["estProd"];
                     
                     if ($estado=="1") {
                         $estado="Alta";
                     } else {
                         $estado="Baja";
                     }
                     // crear lista
                   echo "<tr> 
                   <td> $id </td> 
                   <td> $descripcion </td> 
                   <td> $marca </td>
                   <td> $origen </td>
                   <td> $precio </td>
                   <td> $categoria </td>
                   <td> $estado </td> 
                   
                   </tr>\n";
                 } // end while
                echo "</table>";
                 // cerrar conexión
                 mysql_close($conex);
             
                 


            ?>                       
                    
     </table> 
</div>


</body>
</html>
