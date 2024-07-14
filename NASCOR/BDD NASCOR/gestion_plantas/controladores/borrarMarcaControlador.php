<?php
require_once '../modelos/conjuntoMarcasClass.php';
$marcas = new conjuntoMarcas();
if ($marcas->borrarMarca($_GET['idMarca'])) {
	header('Location: leerMarcasControlador.php');
} else {
	echo '<stong>error en la aplicación</strong>';
}
