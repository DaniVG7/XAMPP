<?php
include '../modelos/conjuntoCochesClass.php';
$coches = new conjuntoCoches();
$posicionURL = $_GET['posicion']; 
$posAModificar = $coches->coches[$posicionURL]; 
require_once '../vistas/modificarCocheVista.php'
?>