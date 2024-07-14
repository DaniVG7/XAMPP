<?php
require_once '../modelos/cursoClass.php';
require_once '../modelos/conjuntoAlumnosClass.php';
$listaCursos = new cursos();
$listaNoMatriculados = $listaCursos->leerCursosNoAlumno($_GET['idAlumno']);
$alumnos = new conjuntoAlumnos();
$alu=$alumnos->leerAlumno($_GET['idAlumno']);
require_once '../vistas/anadir1CursoAlumnoVista.php';
