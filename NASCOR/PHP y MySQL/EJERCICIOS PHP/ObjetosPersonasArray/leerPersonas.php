<?php
include '../comun/libreria.php';
include 'personaClass.php';
cabecera('estilos.css','');
echo '<a href="index.php">Añadir persona</a>
<hr>';

$data = file_get_contents("personas.dat");
$personas = unserialize($data, ['allowed_classes'=> true]);
foreach ($personas as $per) {
		$per->mostrarDatos();
}
pie();