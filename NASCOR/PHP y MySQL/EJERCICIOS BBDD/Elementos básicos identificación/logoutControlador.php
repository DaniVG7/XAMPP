<?php
include_once '../modelos/intranetClass.php';
$conexionIntranet = new intranet();
if ($conexionIntranet->borrarConexion()) {
	include_once '../modelos/asignaturasClass.php';
	$TodoAsignaturas = new asignaturas();
	include '../vistas/leerAsignaturasVista.php';	
}