<?php
require_once '../modelos/conjuntoPlantasClass.php';
$plantas = new Plantas();
if ($plantas->borrarPlanta($_GET['idPlanta'])) {
	header('Location: leerPlantasControlador.php');
} else {
	echo '<stong>error en la aplicación</strong>';
}
