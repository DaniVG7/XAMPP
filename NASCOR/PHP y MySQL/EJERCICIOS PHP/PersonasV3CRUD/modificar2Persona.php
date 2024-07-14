<?php
include '../comun/libreria.php';
cabecera('estilos.css','');
include 'personaClass.php';
$data = file_get_contents("personas.dat");
$personas = unserialize($data, ['allowed_classes'=> true]);

//echo '<pre>';
//print_r($_POST);
$p=new Persona($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad']);
//echo 'Antes de cambiar el array';
//print_r($personas);
$personas[$_POST['pos']] = $p;
//echo 'Despues de cambiar el array';
//print_r($personas);
header('Location: leerPersonas.php');
pie();
$file= fopen("personas.dat","w");
fwrite($file,serialize($personas));
fclose($file);
