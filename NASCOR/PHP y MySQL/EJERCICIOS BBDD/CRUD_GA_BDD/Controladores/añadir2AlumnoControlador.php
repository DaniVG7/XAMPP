<?php
require_once '../Modelos/conjuntoAlumnosClass.php';
//require_once '../Modelos/conjuntoCursosClass.php';
$alumnos = new conjuntoAlumnos();
$alumnos->añadirAlumno($_POST['nombre'],$_POST['ap1'],$_POST['ap2'],$_POST['DNI'],$_POST['estudios'],$_POST['cursos']);
header ('Location: ../index.php');
