<a href="anadir1AlumnoControlador.php">Añadir alumno</a> | <a href="leerCursosControlador.php">Consultar Cursos</a> | <a href="leerAlumnosControlador.php">Gestionar Alumnos</a>
<h1>Listado de Profesores</h1>
<a href="anadir1ProfesorControlador.php">Añadir Profesor</a><hr>
<?php
foreach ($listaProfesores->profesores as $clave => $profe ) {
	echo '<a href="borrarProfesorControlador.php?posicion='.$clave.'">Borrar</a> | ';
	echo '<a href="modificar1ProfesorControlador.php?posicion='.$clave.'">Modificar</a> <br>';	
	$profe->mostrarDatos();
	echo '<hr>';
} 