<?php
require_once '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos;
$listaCursos = $alumnos->consultaCursos($_GET['idAlumno']);
$alu = $alumnos->leerAlumno($_GET['idAlumno']);
require_once '../vistas/consultaCursosVista.php';
