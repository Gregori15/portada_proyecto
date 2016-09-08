<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Registro de Usuarios</title>    
 </head>
<body>
<h2>Formulario de Registro Usuarios</h2>

    <fieldset>
		<table align="center">
		<form name="formulario" enctype="multipart/form-data" method="post" action="guardar_usuario.php">
        <tr><td><label for="id_nombre">Nombre</label></td>
        <td><input type="text" id="id_nombre" name="nombre" /></td></tr>
        <tr><td><label for="id_apellidos">Apellidos</label></td>
        <td><input type="text" id="id_apellidos" name="apellidos" /></td></tr>
		<tr><td><label for="id_telefono">Telefono</label></td>
        <td><input type="text" id="id_telefono" name="telefono" /></td></tr>
		<tr><td><label for="id_celular">Celular</label></td>
        <td><input type="text" id="id_celular" name="celuar" /></td></tr>
		<tr><td><label for="id_login">Login</label></td>
        <td><input type="text" id="id_login" name="login" /></td></tr>
		<tr><td><label for="id_contraseña">Password</label></td>
		<td><input type= "password" name= "contraseña"></td></tr>
		<tr><td><input type="submit" value= "Guardar"></td></tr>
		</form>
		<form name="formulario" enctype="multipart/form-data" method="post" action="index.php">
		<tr><td><input type="submit" value="volver" /></td></tr>
		</form>
	</table>
 </fieldset>
</body>
</html>