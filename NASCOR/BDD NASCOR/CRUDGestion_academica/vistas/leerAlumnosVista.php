<a href="anadir1AlumnoControlador.php">Añadir alumno</a>
<h1>Listado de alumnos</h1>
<?php
foreach ($alumnos->alumnos as $clave => $alu ) {
	echo'<a href="borrarAlumnoControlador.php?posicion='.$clave.'"><button>Borrar Alumno</button><a>  |  ';
	echo'<a href="modificarAlumnoControlador.php?posicion='.$clave.'"><button>Modificar Alumno</button><a><br>';
	echo 'Alumno:<br>';
	$alu->mostrarDatos();
	echo '<hr>';
} 