<?php
session_start();
if (isset($_SESSION['mensaje'])) {
	echo $_SESSION['mensaje'];
	echo $_SESSION['mensaje']='';
}
echo '<a href="anadir1PersonaControlador.php">Añadir persona</a><hr>';
		foreach ($personas->personas as $per) {
			echo '<a href="borrarPersonaControlador.php?posicion='.$per['idPersona'].'">Borrar</a> | ';
			echo '<a href="modificar1PersonaControlador.php?posicion='.$per['idPersona'].'">Modificar</a><br>';	
			echo '<strong>Nombre: </strong>'.$per['nombre'].'<br>';	
			echo '<strong>Apellido 1: </strong>'.$per['ape1'].'<br>';	
			echo '<strong>Apellido 2: </strong>'.$per['ape2'].'<br>';	
			echo '<strong>DNI: </strong>'.$per['DNI'].'<hr>';				
		}