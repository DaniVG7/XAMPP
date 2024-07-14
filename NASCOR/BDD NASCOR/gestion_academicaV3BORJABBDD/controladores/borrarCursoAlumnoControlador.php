<?php
require_once '../modelos/cursoClass.php';
$cursos = new cursos();
if ($cursos->borrarCursoAlumno($_GET['idAluCurso'])) {
	header ('location: consultaCursosAlumnoControlador.php?idAlumno='.$_GET['idAlumno']);
} else {
	echo "Error al borrar la matricula";
}
