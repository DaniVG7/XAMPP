<?php 
require_once '../Modelos/conjuntoCursosClass.php';
/*$fechaInicio = ($_POST['fechaInicio'] === "") ? NULL : $_POST['fechaInicio'];
$fechaFinal = ($_POST['fechaFinal'] === "") ? NULL : $_POST['fechaFinal'];*/


//Esto es equivalente al codigo anterior pero con IF/Else:

if ($_POST['fechaInicio'] === "") {
    $fechaInicio = NULL;
}else{
	$fechaInicio = $_POST['fechaInicio'];
}
if ($_POST['fechaFinal'] === "") {
    $fechaFinal = NULL;
}else{
	$fechaFinal = $_POST['fechaFinal'];
}

$cursos = new conjuntoCursos();
$cursos->añadirCurso(NULL, $_POST['nombreCurso'], $fechaInicio, $fechaFinal, $_POST['numHoras'], $_POST['idAula'], $_POST['idProfesor']);

header('Location: leerCursosControlador.php');
