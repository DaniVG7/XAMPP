<?php 
require_once '../Modelos/conjuntoProfesoresClass.php';
require_once '../Modelos/conjuntoAulasClass.php';
$profesores = new conjuntoProfesores();
$aulas = new conjuntoAulas();
require_once '../Vistas/añadirCursoVista.php';