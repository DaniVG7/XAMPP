<?php
require_once '../modelos/conjuntoPlantasClass.php';
$plantas = new Plantas();
if (isset($_GET['tipo'])) {
	if ($_GET['tipo']=='XML') {
		require_once '../vistas/leerPlantasXMLVista.php';
	} else if ($_GET['tipo']=='JSON') {
		require_once '../vistas/leerPlantasJSONVista.php';
	}
	else {
		require_once '../vistas/leerPlantasVista.php';
	}
} else {
	require_once '../vistas/leerPlantasVista.php';
}