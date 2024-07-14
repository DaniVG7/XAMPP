<a href="anadir1PlantaControlador.php">Añadir Plantas</a> | 
<a href="leerPlantasControlador.php?tipo=XML">Versión XML</a> | 
<a href="leerPlantasControlador.php?tipo=JSON">Versión JSON</a> 
<hr>
<?php
foreach ($plantas->plantas as $planta) {
	echo '<a href="modificar1PlantaControlador.php?idPlanta='.$planta['id'].'">Modificar planta</a> | ';
	echo '<a href="borrarPlantaControlador.php?idPlanta='.$planta['id'].'">Borrar planta</a> <br> ';	
	echo '<strong>ID: </strong>'.$planta['id'].'<br>';
	echo '<strong>Nombre científico: </strong>'.$planta['Nombre_cientifico'].'<br>';
	echo '<strong>Nombre común: </strong>'.$planta['Nombre_comun'].'<br>';
	echo '<strong>Descripción: </strong>'.$planta['Descripcion'].'<br>';
	echo '<strong>Ubicación: </strong>'.$planta['Ubicacion'].'<br>';	
	echo '<strong>Stock: </strong>'.$planta['stock'].'<br>';	
	echo '<hr>';
}