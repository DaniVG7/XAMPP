<?php
require_once '../Modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos();
if (isset($_GET['id_alumno'])) {
 	$json = $alumnos->leerAlumno($_GET['id_alumno']);
} else {
	$json = $alumnos->alumnos;
}
require_once '../Vistas/leerAlumnosJSONVista.php';

