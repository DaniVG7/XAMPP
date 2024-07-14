<?php
require_once '../modelos/cursoClass.php';
$listaCursos = new cursos();
foreach ($_POST['cursos'] as $key => $curs) {
	if ($listaCursos->anadirCursoAlumno($curs,$_POST['idAlumno'])) {
		echo 'Curso '.$curs[$key].' ha sido insertado correctamente<br>';
	} else {
		echo 'Curso '.$curs[$key].' NO ha sido insertado correctamente<br>';
	}
}
header ('location: consultaCursosAlumnoControlador.php?idAlumno='.$_POST['idAlumno']);
