<?php
include '../0comun/libreria.php';
cabecera('coches.css');
include 'cocheClass.php';

$data = file_get_contents("coches.dat"); //Cogemos el archivo coches.dat y lo volvemos array.
$coches = unserialize($data, ['allowed_classes'=> true]); //llamamos $coches al array extraido.

unset($coches[$_GET['posicion']]); //unset = borrar y se recupera mediante el metodo GET (pq sale en la URL) la posicion del elemento a borrar.



$file= fopen("coches.dat","w"); //Guardamos los nuevos datos actualizados
fwrite($file,serialize($coches));
fclose($file);
pie('');
header('Location: verCoches.php');

?>