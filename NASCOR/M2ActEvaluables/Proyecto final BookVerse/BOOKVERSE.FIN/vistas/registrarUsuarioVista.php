<?php 
require_once '../../0comun/libreria.php';
cabecera('../inicioSesion.css','');

?>



<div class="container">
	<div class="bookverse2">
    	<img src="../bvrs.png" alt="Bookverse">
		<h2>Bienvenido a Bookverse rellene los campos a continuación:</h2>
		<form method="POST" action="../controladores/registrarUsuarioControlador.php">
			<input type="text" required name="nombre" value="" placeholder="Nombre"><br>
			<input type="text" required name="apellido1" value="" placeholder="Primer apellido"><br>
			<input type="text" required name="apellido2" value="" placeholder="Segundo apellido"><br>
			<input type="text" required name="DNI" value="" placeholder="Número de DNI"><br>
			<input type="text" name="fechaNacimiento" placeholder="Fecha de Nacimiento" onfocus="(this.type='date')"
			onblur="(this.type='text')"><br>
			<input type="text" required name="numeroTelefono" value="" placeholder="Número de teléfono"><br>
			<input type="text" required name="usuario" value="" placeholder="Nombre de usuario"><br>
			<input type="password" required name="contraseña" value="" placeholder="Contraseña"><br><br>
			<input type="submit" value="Registrarse"><br><br><br>
		</form>	
	</div>
</div>
	
<?php
pie('');
?>