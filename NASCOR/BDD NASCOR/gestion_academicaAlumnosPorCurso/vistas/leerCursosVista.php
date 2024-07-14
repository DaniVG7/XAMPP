<a href="anadir1CursoControlador.php">Añadir curso</a> | <a href="../index.php">Gestionar Alumnos</a>
<h1>Listado de Cursos</h1>
<table>
<?php
foreach ($listaCursos->cursos as $clave => $curs ) {
	echo '<tr>';
	echo '<td>'.$curs->getId().'</td>';
	echo '<td>'.$curs->getNombre().'</td>';
	echo '<td><a href="borrarCursoControlador.php?posicion='.$clave.'">Borrar</a> | ';
	echo '<a href="modificar1CursoControlador.php?posicion='.$clave.'">Modificar</a> </td>';	
	echo '</tr>';
} 
?>
</table>