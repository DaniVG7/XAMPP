<?php
include '../comun/libreria.php';
cabecera('estilos.css','');
include 'personaClass.php';
//echo '<pre>';
//print_r($_GET);
$data = file_get_contents("personas.dat");
$personas = unserialize($data, ['allowed_classes'=> true]);
//echo 'antes de borrar<br>';
//print_r($personas);
unset($personas[$_GET['posicion']]);
//echo 'Despues de borrar<br>';
//print_r($personas);
$file= fopen("personas.dat","w");
fwrite($file,serialize($personas));
fclose($file);
pie();
header('Location: leerPersonas.php');