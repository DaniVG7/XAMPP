<?php
session_start();
include '../modelos/conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
if ($personas->borrarPersona($_GET['posicion'])) {
	$mensaje="El registro ".$_GET['posicion']." se ha borrado correctamente";
} else {
	$mensaje="El registro no se ha podido borrar";
}
$_SESSION["mensaje"]=$mensaje;
header('Location: ../index.php');
