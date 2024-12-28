<form id="dataAlta" action="ProcesoNuevoProducto.php" method="POST" enctype="multipart/form-data">
     <table class="login" id="NuevoProd">
      <tr>
        <th colspan="4" class="titulo">Añadir Producto:</th>
      </tr>
      <tr>
      <td>Descripción:</td>
        <td class="input">
        <input id="descProd"
       type="text"
       name="DES"
       title="Inserte Descripción"
       />
        </td>
        <td>Marca:</td>
        <td class="input">
        <input id="marProd"
       type="text"
       name="MAR"
       title="Inserte Marca"
       />
        </td>
        </tr>
        <tr> 
        <td>Origen:</td>
        <td class="input">
          <select id="origProd" name="ORI" title="Seleccionar Origen">
            <option value="">Seleccione Origen</option>       
            <option value="Alemania">Alemania</option>
            <option value="China">China</option>
            <option value="USA">USA</option>                        
          </select>
        </td>
        <td>Precio:</td>
        <td class="input">
        <input id="precProd"
       type="text"
       name="PRE"
       title="Inserte Precio"
       />
        </td>
        </tr>
        <tr>
        <td>Categoría:</td>
        <td class="input">          
        <select id="catProd" name="CAT" title="Seleccionar Categoría">
            <option value="0">Seleccione Categoría</option>       
            <?php
                include "CargarCategorias.inc";
            ?>                            
          </select></td>
        <td colspan="2">
          <input type="button" value="Ingresar Producto" onclick="CheckAlta()" class="boton"/>
          <input type="reset"  value="Cancelar" class="boton"/>
        </td>
      </tr>                        
     </table>
    </form>