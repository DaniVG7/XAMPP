<?php
require_once '../modelos/conjuntoAlumnosClass.php';
require_once '../modelos/conjuntoCursosClass.php';
$cursos = new conjuntoCursos();
$alumnos = new conjuntoAlumnos();
$listaAlumnosCurso=$alumnos->buscarAlumnosPorCurso($_GET['id']);
require_once '../vistas/leerAlumnosCursoVista.php';
