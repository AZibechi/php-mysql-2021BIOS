<form id="dataLOG" action="ProcesoLogin.php" method="POST">

<table class="login">

<tr>

<td>
Usuario:
</td>

<td>
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

<td style="text-align: right; font-size: 12px;">
<input id="claveUs"
       type="password"
       name="CONT"
       title="Inserte contraseña"

/> 
</td>

</tr>

<tr>

<td>

</td>

<td>
<input type="button" value="Entrar" onclick="CheckReg();" />
<a href="Registrarse.php"> <input type="button" value="Registrarse" /></a>
</td>

</tr>

<tr>

<td>
</td>
<td style="text-align: right;">
<button>
    Cambiar Contraseña
</button>
</td>

</tr>

</table>

</form>