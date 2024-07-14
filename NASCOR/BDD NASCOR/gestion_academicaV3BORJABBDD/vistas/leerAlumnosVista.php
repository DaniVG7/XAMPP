<a href="anadir1AlumnoControlador.php">Añadir alumno</a> | <a href="leerCursosControlador.php">Consultar Cursos</a>
<h1>Listado de alumnos</h1>
<?php
foreach ($alumnos->alumnos as $alu ) {
	echo '<a href="consultaCursosAlumnoControlador.php?idAlumno='.$alu['idAlumno'].'">Consulta cursos</a> | ';	
	echo '<a href="borrarAlumnoControlador.php?posicion='.$alu['idAlumno'].'">Borrar</a> | ';
	echo '<a href="modificar1AlumnoControlador.php?posicion='.$alu['idAlumno'].'">Modificar</a> <br>';	
	echo '<strong>Nombre</strong>: '.$alu['nombre'].'<br>';
	echo '<strong>Apellido 1</strong>: '.$alu['ape1'].'<br>';
	echo '<strong>Apellido 2</strong>: '.$alu['ape2'].'<br>';
	echo '<strong>DNI</strong>: '.$alu['DNI'].'<br>';	
	echo '<strong>Estudios previos</strong>: '.$alu['estudios'].'<br>';
	//echo '<strong>Curso matrículado</strong>: '.$alu['nombreCurso'].'<br>';	
	echo '<hr>';
} 