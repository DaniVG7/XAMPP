<?php
require_once '../modelos/conjuntoCursosClass.php';
$listaCursos = new conjuntoCursos();
$curs = $listaCursos->cursos[$_GET['posicion']];
require_once '../vistas/modificarCursoVista.php';
