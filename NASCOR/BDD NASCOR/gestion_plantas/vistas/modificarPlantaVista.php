<form action="modificar2PlantaControlador.php" method="POST">
	Nombre científico: <input type="text" name="cientifico" value="<?php echo $planta['Nombre_cientifico']; ?>"><br>
	Nombre común: <input type="text" name="comun" value="<?php echo $planta['Nombre_comun']; ?>"><br>
	Descripción:<br><textarea name="descripcion"><?php echo $planta['Descripcion']; ?></textarea><br>
	Stock: <input type="number" name="stock" value="<?php echo $planta['stock']; ?>"><br>
	Ubicación: <select name="ubicacion">
		<?php
		foreach ($ubicaciones->ubicaciones as $valor) {
			echo '<option value="'.$valor['id'].'"';
			if ($valor['id']==$planta['id']) {
				echo 'selected';
			}	
			echo '>'.$valor['Ubicacion'].'</option>';
		}
		?>
	</select><br>
	<input type="hidden" name="idPlanta" value="<?php echo $planta['id']; ?>">
	<input type="submit" value="Modificar Planta">
</form>