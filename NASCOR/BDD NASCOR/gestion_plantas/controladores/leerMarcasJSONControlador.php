<?php
require_once '../modelos/conjuntoMarcasClass.php';
$marcas = new conjuntoMarcas();
if (isset($_GET['idMarca'])) {
 	$json = $plantas->leerMarca($_GET['idMarca']);
} else {
	$json = $marcas->marcas;
}
require_once '../vistas/leerMarcasJSONVista.php';

