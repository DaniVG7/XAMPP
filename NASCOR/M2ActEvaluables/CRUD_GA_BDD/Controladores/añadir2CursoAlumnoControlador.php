<?php 
require_once '../Modelos/conjuntoCursosClass.php';
$listaCursos = new conjuntoCursos();
foreach ($_POST['cursos'] as $curso) {
    if ($listaCursos->añadirCursoAlumno($curso, $_POST['idAlumno'])) {
        echo 'Curso ' . $curso . ' se ha insertado correctamente<br>';
    } else {
        echo 'Curso ' . $curso . ' no se ha podido insertar<br>';
    }
}

header('Location: consultaCursosAlumnoControlador.php?idAlumno=' . $_POST['idAlumno']);
