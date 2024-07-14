<?php
require_once '../modelos/conjuntoPlantasClass.php';
$plantas = new Plantas();
$planta = $plantas->leerInfoPlanta($_GET['idPlanta']);
$estaciones = $plantas->leerFloracionPlanta($_GET['idPlanta']);
require_once '../vistas/leerInfoPlantaVista.php';