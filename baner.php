
<!DOCTYPE html>
<html>
<head><title>Logo Principal Huellitas</title></head>
<link rel="stylesheet" href=" estilos.css">
<h2>Huellitas</h2>
<body>
<table border="0"align="center">
	<tr>
			<img src="perritos/adoptame-3.jpg" style="width:300px; height:"" >
		<td><input type="submit" value="Fundaciones" style="color:red" bgcolor="color:blue" />				
		<input type="submit" value="Servicios" style="color:green" bgcolor="color:blue"/>
		<input type="submit" value="Empresas" style="color:blue" bgcolor="color:yellow"/>
		<input type="submit" value="Mascotas" style="color:purple" bgcolor="color:blue" /></td>
	<!--<img src="perritos/patitas.jpg" style="width:300px; height:"" id="imagen" >-->
		<td><A href=""> ............Aqui vendra una imagen</A></td>
	</tr>
</table>
<table border="0" align="right">
	<form  action="sesion.php" method="POST" >
	
	<tr><td><label for="id_usuario">Usuario</label></td>
	<td><input type="text" name="login" value="" id="id_usuario"/></td></tr>
	<tr><tr><td><label for="id_contrasena">Contraseña</label></td>
	<td><input type="password" name="pwd" value="" id="id_contrasena"/></td></tr>
	<tr><td colspan="2" align ="center"><input type="submit" value="enviar"></td></tr>
	

	<tr><td><A href="registro_usuario.php" target="index.php">Regístrate Gratis!</A></td></tr>
	</form>

</table>
</body>
</html>