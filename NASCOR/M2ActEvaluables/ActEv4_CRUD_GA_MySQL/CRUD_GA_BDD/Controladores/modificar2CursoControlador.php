<?php
include_once '../Modelos/conjuntoCursosClass.php';
if ($_POST['fechaInicio'] === "") {
    $fechaInicio = NULL;
} else {
    $fechaInicio = $_POST['fechaInicio'];
}

if ($_POST['fechaFinal'] === "") {
    $fechaFinal = NULL;
} else {
    $fechaFinal = $_POST['fechaFinal'];
}

$cursos = new conjuntoCursos();
$cursos->modificarCurso($_POST['idCurso'], $_POST['nombreCurso'], $fechaInicio, $fechaFinal, $_POST['numHoras'], $_POST['idProfesor'], $_POST['idAula']);

header ('Location: leerCursosControlador.php');
