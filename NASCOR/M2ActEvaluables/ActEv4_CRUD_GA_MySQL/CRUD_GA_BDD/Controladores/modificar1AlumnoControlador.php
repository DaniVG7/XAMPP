<?php
require_once '../Modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alumno = $alumnos->leerAlumno($_GET['posicion']);
require_once '../Vistas/modificarAlumnoVista.php';
