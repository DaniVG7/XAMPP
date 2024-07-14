<?php
include '../comun/libreria.php';
require_once 'personaClass.php';
cabecera('estilos.css','');
$data = file_get_contents("personas.dat");
$personas = unserialize($data, ['allowed_classes'=> true]);

//$personas= json_decode(file_get_contents('personas.json'),true);

//echo '<pre>';
//print_r($_POST);
$persona = new Persona($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad']);
//print_r($persona);
$personas[]=$persona;
foreach ($personas as $per) {
		echo $per->mostrarDatos();
}
//print_r($personas);
$file= fopen("personas.dat","w");
fwrite($file,serialize($personas));
fclose($file);
header('Location: leerPersonas.php');

//file_put_contents("personas.json",json_encode($personas));
pie();