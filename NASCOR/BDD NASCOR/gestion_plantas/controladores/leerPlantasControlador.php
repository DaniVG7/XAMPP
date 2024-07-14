<?php
require_once '../modelos/conjuntoPlantasClass.php';
$plantas = new Plantas();
if(isset($_GET['tipo'])){
	if($_GET['tipo']=='XML'){
	 	require_once '../controladores/leerPlantasXMLControlador.php';
	}else if ($_GET['tipo']=='JSON'){
	 	require_once '../controladores/leerPlantasJSONControlador.php';

	}
}else{	
	require_once '../vistas/leerPlantasVista.php';
	}
	