<?php
require_once '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
$alu = new Alumno($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad'],$_POST['curso'],$_POST['nivel']);
$alumnos->anadirAlumno($alu);
header ('Location: ../index.php');
