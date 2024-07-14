<?php
require '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alumnos->borrarAlumno($_GET['posicion']);// este posicion tiene que ser el mismo nombre del href del vista leerAlumnos y coge su valor (=).
header ('Location: ../index.php');
