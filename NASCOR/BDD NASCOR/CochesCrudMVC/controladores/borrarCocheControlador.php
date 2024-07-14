<?php
include '../modelos/conjuntoCochesClass.php'; 
$coches = new conjuntoCoches(); 
$coches->borrarCoche($_GET['posicion']);  
header('Location: ../index.php');
?>