<a href="anadir1AlumnoControlador.php">Añadir alumno</a> | <a href="leerCursosControlador.php">Consultar Cursos</a>
<h1>Listado de alumnos</h1>
<?php
foreach ($alumnos->alumnos as $clave => $alu ) {
	echo '<a href="borrarAlumnoControlador.php?posicion='.$clave.'">Borrar</a> | ';
	echo '<a href="modificar1AlumnoControlador.php?posicion='.$clave.'">Modificar</a> <br>';	
	$alu->mostrarDatos();
	echo '<hr>';
} 