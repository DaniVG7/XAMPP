<?php
require_once '../modelos/conjuntoMarcasClass.php';
$marcas = new conjuntoMarcas();
if ($marcas->modificarMarca($_POST['idMarca'],$_POST['nombre'])) {
	header('Location: leerMarcasControlador.php');
} else {
	echo '<stong>error en la aplicación</strong>';
}
