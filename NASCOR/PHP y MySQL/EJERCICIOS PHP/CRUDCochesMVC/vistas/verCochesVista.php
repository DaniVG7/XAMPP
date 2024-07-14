<?php
include '../../0comun/libreria.php';
cabecera('../coches.css', '../../0comun/estilos.css');
echo '<a href="añadirCocheControlador.php"><button>Añadir vehículo</button></a><hr>';
echo '<main>';
		foreach ($coches->coches as $clave => $coche) {
			echo '<div class="verCoches"><a href="borrarCocheControlador.php?posicion='.$clave.'"><button style="background-color:white"><img src="../papelera.jpg"></button></a>';
			echo '<a href="modificarCocheControlador.php?posicion='.$clave.'"><button style="background-color:green"><strong style="color:white">Modificar</strong></button></a><br>';	
			$coche->mostrarDatos();		
			echo '</div>';
		}
		echo '</main>';
pie('');
