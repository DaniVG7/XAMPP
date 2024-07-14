<?php
require_once '../Modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$listaCursos= $alumnos->consultaCursos($_GET['idAlumno']);
$alumno = $alumnos->leerAlumno($_GET['idAlumno']);
require_once '../Vistas/consultaCursosVista.php';
