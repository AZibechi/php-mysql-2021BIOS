<form id="dataBaja" action="ProcesoBajaProducto.php" method="POST" enctype="multipart/form-data">
     <table class="login">
      <tr>
        <th colspan="2" class="titulo">Dar de baja producto:</th>
      </tr>
      <tr>
        <td>Id del producto:</td>
        <td class="input">
        <input id="idProdB"
       type="text"
       name="IDB"
       title="Inserte Id del producto"
       />
        </td>
      </tr>
      
      <tr>
        <td colspan="2">
          <input type="submit" value="Dar de baja Producto" onclick="CheckBaja()" class="boton"/>
          <input type="reset"  value="Cancelar" class="boton"/>
        </td>
      </tr>                        
     </table>
    </form>