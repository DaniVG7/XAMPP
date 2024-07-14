<?php
require_once '../Modelos/conjuntoCursosClass.php';
$cursos= new conjuntoCursos();
if ($cursos -> borrarCursoAlumno($_GET['idAluCurso'])){
	header ('Location: consultaCursosAlumnoControlador.php?idAlumno="'.$_GET['idAlumno'].'"');
}else{
	echo 'Error al borrar la matrícula del curso';
}
//$listaCursosBorrados= $cursos->borrarCursoAlumno($_GET['idAluCurso']);
//require_once '../Vistas/consultaCursosVista.php';
