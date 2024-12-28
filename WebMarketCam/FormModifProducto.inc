<form id="dataBaja" action="ConfirmModif.php" method="POST" enctype="multipart/form-data">
     <table class="login">
      <tr>
        <th colspan="2" class="titulo">Modificar Producto:</th>
      </tr>
      <tr>
        <td>Id del producto:</td>
        <td class="input">
        <input id="idProdM"
       type="text"
       name="IDM"
       title="Inserte Id del producto"
       />
        </td>
      </tr>
      
      <tr>
        <td colspan="2">
          <input type="submit" value="Modificar Producto" onclick="CheckModificar()" class="boton" />
          <input type="reset"  value="Cancelar"class="boton" />
        </td>
      </tr>                        
     </table>
    </form>