<?php
require_once 'personaClass.php';
$p1 = new Persona('Daniel','Vargas','García','43566243','Barcelona');
$p2 = new Persona('Carlos Javier','Ordoñez','Beltran','33333333','Terrassa');

$alumnos= array();

$alumnos[]= $p1;
$alumnos[]= $p2;

//mostrar los datos
foreach ($alumnos as $alumno){
	$alumno-> mostrarDatos();
}

?>