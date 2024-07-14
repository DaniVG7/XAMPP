<?php
require_once '../../0comun/libreria.php';
cabecera('../añadirModificar.css','');
if(!empty($_SESSION)){  ?>
<main>
	<h2>Añadir autor</h2>
<div class="formcurso">
<form action="añadir2AutorControlador.php" method="post">
	<label><strong>Nombre:</strong></label><input type="text" require name="nombre"><br>
	<label><strong>Primer Apellido:</strong></label><input type="text" require name="ape1"><br>
	<label><strong>Segundo Apellido:</strong></label><input type="text"  name="ape2"><br>
	<label><strong>Fecha de Nacimiento:</strong></label><input type="date" name="fechaNacimiento"><br>
	<label><strong>Género literario:</strong></label><input type="text" require  name="generoLiterario"><br>
	<label><strong>Premios:</strong></label><input type="text"  name="premios"><br>

	<input type="submit" name="boton" value="Añadir autor">
</form>
</div>
</main>
<?php
}
