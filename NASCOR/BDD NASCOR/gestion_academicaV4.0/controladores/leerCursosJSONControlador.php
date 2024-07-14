<?php
require_once '../modelos/cursoClass.php';
$listaCursos = new cursos();
$cursos = $listaCursos->leerCursosSimple();
require_once '../vistas/leerCursosJSONVista.php';