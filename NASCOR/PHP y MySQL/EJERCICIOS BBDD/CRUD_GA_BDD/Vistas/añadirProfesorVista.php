<?php
include '../../0comun/libreria.php';
cabecera('../formularios.css','');

?>
<main>
	<h2 style="color:black">Añadir Profesor</h2>
	<div class="formcurso">
		<form action="añadir2ProfesorControlador.php" method="post">
			<label><strong>Nombre:</strong></label><input type="text" name="nombre"><br>
			<label><strong>Primer Apellido:</strong></label><input type="text" name="ap1"><br>
			<label><strong>Segundo Apellido:</strong></label><input type="text" name="ap2"><br>
			<label><strong>DNI:</strong></label><input type="text" name="DNI"><br>
			<input type="submit" name="botonEnviar" value="Añadir Profesor">
		</form>
	</div>
</main>
<?php

pie("");