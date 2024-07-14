<?php
include_once '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alumno = new Alumno($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['ciudad'],$_POST['dni'],$_POST['curso'],$_POST['nivel']);
$alumnos->modificarAlumno($_POST['posicion'],$alumno);
header ('Location: ../index.php');