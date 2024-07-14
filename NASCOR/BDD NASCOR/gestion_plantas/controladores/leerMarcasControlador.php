<?php
require_once '../modelos/conjuntoMarcasClass.php';
require_once '../modelos/conjuntoEstacionesClass.php';

$marcas = new conjuntoMarcas();
$estaciones = new conjuntoEstaciones();
require_once '../vistas/leerMarcasVista.php';