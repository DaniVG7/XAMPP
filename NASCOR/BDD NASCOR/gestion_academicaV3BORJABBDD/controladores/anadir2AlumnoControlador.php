<?php
require_once '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
if ($alumnos->anadirAlumno($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['nivel'])) {
	echo 'Todo bien';
} else {
	echo 'Ha fallado';
}
header ('Location: ../index.php');
