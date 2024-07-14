<?php  
//include '../0comun/libreria.php';
//cabecera('coches.css');
require_once '../modelos/conjuntoCochesClass.php'; 
$coches = new conjuntoCoches(); 
require_once '../vistas/añadirCoche2Vista.php';