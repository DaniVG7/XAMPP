<?php
//echo '<pre>';
//var_dump($planta, $estaciones);

if ($planta !== null) {
	echo '<h3>Datos adicionales de '.$planta['Nombre_comun'].' ('.$planta['Nombre_cientifico'].')</h3>';
    echo '<strong>Dosis: </strong>'.$planta['Dosis'].' gramos de la marca '.$planta['Nombre'].'<br>';
	echo '<strong>Comentarios adicionales: </strong>'.$planta['Comentario'].'<br>';
} else {
    echo "No se encontraron datos adicionales sobre esta planta.";
}

if (!empty($estaciones)){
	echo '<h3>Época de floración: </h3>';
	foreach($estaciones as $estacion){
		echo $estacion.'<br>';
	}
}else{
	echo '';
}