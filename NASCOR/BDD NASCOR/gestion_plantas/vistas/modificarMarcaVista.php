<form action="modificar2MarcaControlador.php" method="POST">
	Nombre : <input type="text" name="nombre" value="<?php echo $marca['Nombre']; ?>"><br>
	<input type="hidden" name="idMarca" value="<?php echo $marca['id']; ?>">
	<input type="submit" value="Modificar Planta">
</form>