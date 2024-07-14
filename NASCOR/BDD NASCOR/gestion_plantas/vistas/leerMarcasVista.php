<?php
echo '<h3>NUESTRAS MARCAS DE ABONOS</h3>';
echo '<a href="../controladores/leerPlantasControlador.php">Volver al listado de plantas</a> || ';
echo '<a href="../controladores/leerMarcasJSONControlador.php">VER JSON MARCAS</a><br><br>';
echo '<a href="../controladores/añadirMarcaControlador.php"><button> Añadir marca </button></a><br><br>';

foreach ($marcas->marcas as $marca){
	echo $marca['Nombre'].'<br>';
	echo '<a href="../controladores/borrarMarcaControlador.php?idMarca='.$marca['id'].'"> Borrar </a> || ';
	echo '<a href="../controladores/modificarMarcaControlador.php?idMarca='.$marca['id'].'"> Modificar </a><hr>';
	
}

