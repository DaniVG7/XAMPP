<form action="modificar2LibroControlador.php" method="post">
	Título: <input type="text" name="titulo" value="<?php echo $l['titulo'] ?>"><br>
	Año de publicación: <input type="number" name="año" value="<?php echo $l['añoPublicacion'] ?>"><br>
	Idioma: <input type="text" name="idioma" value="<?php echo $l['idioma'] ?>"><br>
	<input type="hidden" name="pos" value="<?php echo $idLibro ?>">
	<input type="submit" name="boton" value="Modificar libro">
</form>