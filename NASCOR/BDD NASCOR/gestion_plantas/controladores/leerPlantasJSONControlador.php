<?php
require_once '../modelos/conjuntoPlantasClass.php';
$plantas = new Plantas();
if (isset($_GET['id'])) {
 	$json = $plantas->leerPlanta($_GET['id']);
} else {
	$json = $plantas->plantas;
}
require_once '../vistas/leerPlantasJSONVista.php';

