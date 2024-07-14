<?php
require_once '../modelos/conjuntoProfesoresClass.php';
require_once '../modelos/conjuntoCursosClass.php';
$profesores = new conjuntoProfesores();
$profe = $profesores->profesores[$_GET['posicion']];
$listaCursos = new conjuntoCursos();
require_once '../vistas/modificarProfesorVista.php';
