<?php
include '../../0comun/libreria.php';
cabecera('../coches.css', '../../0comun/estilos.css');
require_once '../modelos//conjuntoCochesClass.php';  //Cogemos el archivo con la clase conjuntoCoches
$coches = new conjuntoCoches(); //hacemos un nuevo objeto conjuntoCoches
$coche = new Coche($_POST['marca'],$_POST['modelo'],$_POST['año'],$_POST['extras'],$_POST['potencia']); 
$coches->anadirCoche($coche); 
header('Location: ../index.php'); 
pie('');
?>