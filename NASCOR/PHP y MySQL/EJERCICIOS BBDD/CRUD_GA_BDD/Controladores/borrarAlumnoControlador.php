<?php

require_once '../Modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alumnos->borrarAlumno($_GET['posicion']);
header ('Location: ../index.php');
