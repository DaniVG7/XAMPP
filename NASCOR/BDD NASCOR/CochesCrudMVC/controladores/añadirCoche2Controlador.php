<?php  
require_once '../modelos/conjuntoCochesClass.php'; 
$coches = new conjuntoCoches(); 
$coche = new Coche($_POST['marca'],$_POST['modelo'],$_POST['año'],$_POST['extras'],$_POST['potencia']); 
$coches->anadirCoche($coche); 
header('Location: ../index.php'); 
?>