<?php
session_start();
require_once '../modelos/conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
if ($personas->anadirPersona($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni']))  {
	$mensaje="El registro se ha insertado correctamente";
} else {
	$mensaje="El registro no se ha podido insertar";
}
$_SESSION["mensaje"]=$mensaje;


//require_once '../vistas/leerPersonasVista.php';
header ('Location: ../index.php');
