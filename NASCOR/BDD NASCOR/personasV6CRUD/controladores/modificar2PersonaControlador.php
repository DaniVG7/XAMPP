<?php
session_start();
include '../modelos/conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
if ($personas->modificarPersona($_POST['pos'],$_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'])) {
	$_SESSION['mensaje']='Se ha modificado correctamente';
} else {
	$_SESSION['mensaje']='NO se ha modificado correctamente';
}

header('Location: ../index.php');