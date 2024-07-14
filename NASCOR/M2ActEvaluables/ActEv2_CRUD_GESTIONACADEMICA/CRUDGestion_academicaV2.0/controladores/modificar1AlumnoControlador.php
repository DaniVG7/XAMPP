<?php
require_once '../modelos/conjuntoAlumnosClass.php';
require_once '../modelos/conjuntoCursosClass.php';
$alumnos = new conjuntoAlumnos();
$alu = $alumnos->alumnos[$_GET['posicion']];
$listaCursos = new conjuntoCursos();
require_once '../vistas/modificarAlumnoVista.php';
