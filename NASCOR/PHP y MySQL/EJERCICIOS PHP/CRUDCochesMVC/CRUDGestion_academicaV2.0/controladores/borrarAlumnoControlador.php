<?php
require_once '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alumnos->borrarAlumno($_GET['posicion']);
header ('Location: ../index.php');