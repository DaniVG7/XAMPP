<?php
include '../0comun/libreria.php';
include 'personaClass.php';
cabecera('estilos.css','');
echo '<a href="index.php"><button><strong>Añadir persona</strong></button></a></button>
<hr>';

$data = file_get_contents("personas.datos");
$personas = unserialize($data, ['allowed_classes'=> true]);
foreach ($personas as $clave => $per) {
		echo '<div class="leerPersonas"><a href="borrarPersona.php?posicion='.$clave.'"><button style="background-color:red"><strong >Borrar</strong></button></a>';
		echo '<a href="modificar1Persona.php?posicion='.$clave.'"><button style="background-color:green"><strong style="color:white">Modificar</strong></button></a><br>';	
		echo $per->mostrarDatos().'</div>';
		
}
pie('');

?>