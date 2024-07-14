<?php
include '../comun/libreria.php';
include 'personaClass.php';
cabecera('estilos.css','');
echo '<a href="index.php">Añadir persona</a>
<hr>';

$data = file_get_contents("personas.dat");
$personas = unserialize($data, ['allowed_classes'=> true]);
foreach ($personas as $clave => $per) {
		echo '<a href="borrarPersona.php?posicion='.$clave.'">Borrar</a> | ';
		echo '<a href="modificar1Persona.php?posicion='.$clave.'">Modificar</a><br>';	
		$per->mostrarDatos();
		
}
pie();