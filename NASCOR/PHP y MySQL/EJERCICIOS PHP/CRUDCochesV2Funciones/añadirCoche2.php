<?php
require_once 'conjuntoCochesClass.php';  //Cogemos el archivo con la clase conjuntoCoches
$coches = new conjuntoCoches(); //hacemos un nuevo objeto conjuntoCoches
$coche = new Coche($_POST['marca'],$_POST['modelo'],$_POST['año'],$_POST['extras'],$_POST['potencia']); // Hacemos un nuevo objeto Coche
$coches->anadirCoche($coche); // llamamos a la funcion añadir coche de conjuntoCochesClass pasandole el $coche que en realidad lo que hace es: //$this->coches[] = $coche;   <--Esto, añadir el nuevo coche al array coches.
//$this->guardarCoches();	 // guardar los datos en el archivo con la funcion guardar.
header('Location: index.php'); // Redirigimos a index.php

?>