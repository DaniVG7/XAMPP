<?php
include '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$posicionAlumno = $_GET['posicion'];
$posAModificar = $alumnos->alumnos[$posicionAlumno];
require_once '../vistas/modificarAlumnoVista.php';