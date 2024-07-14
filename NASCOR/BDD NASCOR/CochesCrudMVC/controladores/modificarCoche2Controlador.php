<?php
include '../modelos/conjuntoCochesClass.php';
$coches = new conjuntoCoches(); //para modificar el coche solo creamos uno nuevo realmente
$nuevoCoche =new Coche($_POST['marca'],$_POST['modelo'],$_POST['año'],$_POST['extras'],$_POST['potencia']); //construimos el nuevo coche
$coches->modificarCoche($_POST['pos'],$nuevoCoche); //llamamos a la funcion modificar coches y añadimos el $nuevoCoche
header('Location: ../index.php');
?>