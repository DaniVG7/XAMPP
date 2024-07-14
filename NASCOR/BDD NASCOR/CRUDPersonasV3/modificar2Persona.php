<?php
include '../0comun/libreria.php';
cabecera('estilos.css','');
include 'personaClass.php';
$data = file_get_contents("personas.datos");
$personas = unserialize($data, ['allowed_classes'=> true]);


$p=new Persona($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad']); //hacemos que $p sea una persona completamente nueva 

$personas[$_POST['pos']] = $p; //Con esto Cambiamos los datos a los nuevos datos introducidos que será una nueva persona en realidad, no se modifican los datos, solamente se crea una persona nueva.

pie('');
$file= fopen("personas.datos","w");
fwrite($file,serialize($personas));
fclose($file);
header('Location: leerPersonas.php');
?>