<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/modificarCurso.css');
?>
<div>
<form action="modificar2CursoControlador.php" method="post">
	<label>Id:</label><input type="text" name="id" value="<?php echo $curs->getId(); ?>"><br>	
	<label>Nombre:</label><input type="text" name="nombre" value="<?php echo $curs->getNombre(); ?>"><br>
	<input type="hidden" name="posicion" value="<?php echo $_GET['posicion']?>">
	<input type="submit" name="boton" value="Modificar curso">
</form>
</div>
<?php
	pie("");
?>