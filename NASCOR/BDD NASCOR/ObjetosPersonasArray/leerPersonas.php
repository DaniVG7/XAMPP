<?php
include '../0comun/libreria.php';
include 'personaClass.php';
cabecera('');
echo '<a href="index.php">Añadir persona</a>
<hr>';

$data = file_get_contents("personas.dat");
$personas = unserialize($data, ['allowed_classes'=> true]);
foreach ($personas as $clave => $per) {
		$per->mostrarDatos();
}
pie('');