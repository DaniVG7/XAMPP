<?php
include '../0comun/libreria.php';
cabecera('estilos.css');
include 'personaClass.php';

$data = file_get_contents("personas.datos"); //Cogemos el archivo persona.datos y lo volvemos array.
$personas = unserialize($data, ['allowed_classes'=> true]);

unset($personas[$_GET['posicion']]); // en el url sale el numero de la posicion de la persona por lo cual la cogemos por el metodo get y la borramos.

$file= fopen("personas.datos","w"); //Guardamos los nuevos datos actualizados
fwrite($file,serialize($personas));
fclose($file);
pie('');
header('Location: leerPersonas.php');

?>