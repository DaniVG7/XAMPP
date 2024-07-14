<?php 
include '../../0comun/libreria.php';
cabecera('../../0comun/estilos.css','../CSS/anadirCurso.css');
?>
<div>
	<h3 style="color:white";>Añadir nuevo curso</h3>
<form action="anadir2CursoControlador.php" method="post">
	<input type="text" name="id" placeholder="Identificador:"><br>
	<input type="text" name="nombre" placeholder="Descripcion"><br>	
	<input type="submit" value="Añadir curso">
</form>
</div>