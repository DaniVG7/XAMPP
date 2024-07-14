<?php
include '../0comun/libreria.php';
include 'cocheClass.php';
cabecera('coches.css','');
echo '<a href="index.php"><button><strong>Añadir coche</strong></button></a></button>
<hr>';

$data = file_get_contents("coches.dat");
$coches = unserialize($data, ['allowed_classes'=> true]);
echo '<main id="lista">';
foreach ($coches as $clave => $coche) {
		echo '<div class="verCoches"><a href="borrarCoche.php?posicion='.$clave.'"><button style="background-color:white"><strong ><img src="papelera.jpg"></button></a>';
		echo '<a href="modificarCoche.php?posicion='.$clave.'"><button style="background-color:green"><strong style="color:white">Modificar</strong></button></a><br>';	
		echo $coche->mostrarDatos().'</div>';
		
}
echo '</main>';
pie('');

?>