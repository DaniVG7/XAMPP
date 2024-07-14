<?php
session_start();
require_once '../Modelos/conjuntoAulasClass.php';
$aulas = new conjuntoAulas();
$cursoAula = $aulas->consultaCursos($_GET['idAula']);

if (!empty($cursoAula)) {
    $_SESSION['mensajeError'] = '<h3 style="color:red">No se pueden borrar las aulas que tienen cursos asignados⚠️</h3>
<h4 style="color:red">(Si desea remover los cursos para eliminar un aula diríjase a la gestión de cursos)<h4>';
} else {
    $aulas->borrarAula($_GET['idAula']);
}

header('Location: leerAulasControlador.php');