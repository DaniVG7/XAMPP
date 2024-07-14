<?php
include '../modelos/conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
$idPersona=$_GET['posicion'];
$p=$personas->leerPersona($idPersona);
require_once '../vistas/modificarPersonaVista.php';
?>