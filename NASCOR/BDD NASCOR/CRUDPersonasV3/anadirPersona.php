<?php
include '../0comun/libreria.php';
require_once 'personaClass.php'; //coge el archivo con las clases y sus propiedades
cabecera('estilos.css');
$data = file_get_contents("personas.datos"); //coge el archivo con nombre persona.datos
$personas = unserialize($data, ['allowed_classes'=> true]); // lo convierte en un array $personas

$persona = new Persona($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad']); //Creamos una nueva persona con los datos que le introducimos en el formulario.

$personas[]=$persona;				//mete cada persona dentro del array personas que es el persona.datos
foreach ($personas as $per) {		// hacemos que para cada persona que introducimos en el array, muestre sus datos aunq en este caso no es 										necesario ya que como vemos al final, tras añadir la persona al array volveremos a leerPersonas y no veremos 									 este archivo.
		echo $per->mostrarDatos();
}

$file= fopen("personas.datos","w"); // "abrimos el persona.datos" (el segundo parametro 'w' significa que le añadimos texto
fwrite($file,serialize($personas)); // escribir en el archivo el array personas (para actualizarla cada vez que se añade una persona)
fclose($file);						// cerramos el archivo 
header('Location: leerPersonas.php'); //Redirigimos al archivo leerPersonas.php


pie('');

?>