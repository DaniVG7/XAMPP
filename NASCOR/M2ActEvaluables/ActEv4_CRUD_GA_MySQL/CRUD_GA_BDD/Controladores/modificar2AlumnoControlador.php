<?php
include_once '../Modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alumnos->modificarAlumno($_POST['idAlumno'], $_POST['nombre'], $_POST['ape1'], $_POST['ape2'], $_POST['DNI'], $_POST['estudios']);
header ('Location: ../index.php');