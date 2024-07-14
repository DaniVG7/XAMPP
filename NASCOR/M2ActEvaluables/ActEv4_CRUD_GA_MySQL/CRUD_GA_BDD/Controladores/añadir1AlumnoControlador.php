<?php
require_once '../Modelos/conjuntoCursosClass.php';
require_once '../Modelos/conjuntoAlumnosClass.php';
$listaCursos = new conjuntoCursos();
$alumnos = new conjuntoAlumnos();
require_once '../Vistas/añadirAlumnoVista.php';