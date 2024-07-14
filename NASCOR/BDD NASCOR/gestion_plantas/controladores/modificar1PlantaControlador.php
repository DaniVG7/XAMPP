<?php
require_once '../modelos/conjuntoUbicacionesClass.php';
$ubicaciones = new Ubicaciones();
require_once '../modelos/conjuntoPlantasClass.php';
$plantas = new Plantas();
$planta = $plantas->leerPlanta($_GET['idPlanta']);

require_once '../vistas/modificarPlantaVista.php';