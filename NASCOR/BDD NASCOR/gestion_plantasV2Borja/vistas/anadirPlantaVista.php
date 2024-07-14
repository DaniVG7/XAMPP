<form action="anadir2PlantaControlador.php" method="POST">
	Nombre científico: <input type="text" name="cientifico"><br>
	Nombre común: <input type="text" name="comun"><br>
	Descripción:<br><textarea name="descripcion"></textarea><br>
	Stock: <input type="number" name="stock"><br>
	Ubicación: <select name="ubicacion">
		<?php
		foreach ($ubicaciones->ubicaciones as $valor) {
			echo '<option value="'.$valor['id'].'">'.$valor['Ubicacion'].'</option>';
		}
		?>
	</select><br>
	<input type="submit" value="Crear Planta">
</form>