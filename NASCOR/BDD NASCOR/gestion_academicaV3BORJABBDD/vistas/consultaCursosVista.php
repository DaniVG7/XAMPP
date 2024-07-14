<?php
echo '<h2>'.$alu['nombre'].' '.$alu['ape1'].' '.$alu['ape2'].'</h2>';
echo '<a href="anadir1CursoAlumnoControlador.php?idAlumno='.$_GET['idAlumno'].' ">Añadir curso</a><hr>';

if ($listaCursos) {
	foreach ($listaCursos as $curso) {
		echo $curso['nombreCurso'];
		echo ' <a href="borrarCursoAlumnoControlador.php?idAluCurso='.$curso['idAluCurso'].'&idAlumno='.$_GET['idAlumno'].'">Borrar matrícula</a><br>';
	}
} else {
	echo 'Este alumno no tiene ninguna matrícula.';
}