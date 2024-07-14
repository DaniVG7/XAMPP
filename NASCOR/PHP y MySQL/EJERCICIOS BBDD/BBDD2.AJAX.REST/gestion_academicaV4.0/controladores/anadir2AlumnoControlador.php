<?php
require_once '../modelos/conjuntoAlumnosClass.php';
require_once '../modelos/cursoClass.php';
$alumnos = new conjuntoAlumnos();
$idNewAlumno=$alumnos->anadirAlumno($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['nivel']);

if (($idNewAlumno > 0) && ($_POST['curso']>0)) { 
	$curso = new cursos();
	$curso->anadirCursoAlumno($_POST['curso'],$idNewAlumno);
	echo 'Ha ido bien';
} else {
	echo 'Ha fallado';
}
//header ('Location: ../index.php');
