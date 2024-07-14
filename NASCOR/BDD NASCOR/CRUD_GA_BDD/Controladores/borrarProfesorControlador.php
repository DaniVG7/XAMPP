<?php
/*require_once '../Modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$profesores->borrarProfesor($_GET['idProfesor']);
header ('Location: leerProfesoresControlador.php');*/?>
<?php
session_start();
require_once '../Modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$cursoProfesor = $profesores->consultaCursos($_GET['idProfesor']);

if (!empty($cursoProfesor)) {
    $_SESSION['mensajeError'] = 'mensaje de error en la vista.';
} else {
    $profesores->borrarProfesor($_GET['idProfesor']);
}

header('Location: leerProfesoresControlador.php');