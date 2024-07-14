<?php
include_once '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alumnos->modificarAlumno($_POST['idAlumno'],$_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['nivel']);
header ('Location: ../index.php');