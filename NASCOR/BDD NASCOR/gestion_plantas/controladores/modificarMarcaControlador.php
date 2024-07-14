<?php
require_once '../modelos/conjuntoMarcasClass.php';
$marcas = new conjuntoMarcas();
$marca = $marcas->leerMarca($_GET['idMarca']);

require_once '../vistas/modificarMarcaVista.php';