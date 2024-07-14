<?php
require_once '../modelos/conjuntoPlantasClass.php';
$plantas = new Plantas();
if ($plantas->anadirPlantas($_POST['cientifico'],$_POST['comun'],$_POST['descripcion'],$_POST['stock'],$_POST['ubicacion'])) {
	header('Location: leerPlantasControlador.php');
} else {
	echo '<stong>error en la aplicación</strong>';
}
