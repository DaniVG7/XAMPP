<?php
require_once '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alu = $alumnos->leerAlumno($_GET['posicion']);
require_once '../vistas/modificarAlumnoVista.php';
