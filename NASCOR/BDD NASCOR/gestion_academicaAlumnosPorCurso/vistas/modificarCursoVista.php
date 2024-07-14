<form action="modificar2CursoControlador.php" method="post">
	Id: <input type="text" name="id" value="<?php echo $curs->getId(); ?>"><br>	
	Nombre: <input type="text" name="nombre" value="<?php echo $curs->getNombre(); ?>"><br>
	<input type="hidden" name="posicion" value="<?php echo $_GET['posicion']?>">
	<input type="submit" name="boton" value="Modificar curso">
</form>
