<?php
require_once '../Modelos/conjuntoCursosClass.php';
require_once '../Modelos/conjuntoAlumnosClass.php';
$listaCursos = new conjuntoCursos();
$listaCursosNoMatriculados = $listaCursos->leerCursosNoMatriculados($_GET['idAlumno']);
$alumnos = new conjuntoAlumnos();
$alumno =$alumnos->leerAlumno($_GET['idAlumno']);
require_once '../Vistas/añadirCursoAlumnoVista.php';