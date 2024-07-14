<?php
require_once '../modelos/conjuntoMarcasClass.php';
$marcas = new conjuntoMarcas();
if ($marcas->añadirMarca($_POST['nombre'])) {
	header('Location: leerMarcasControlador.php');
} else {
	echo '<stong>error en la aplicación</strong>';
}
