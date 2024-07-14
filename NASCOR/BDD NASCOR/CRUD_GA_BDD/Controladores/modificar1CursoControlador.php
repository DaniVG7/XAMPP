<?php
require_once '../Modelos/conjuntoCursosClass.php';
require_once '../Modelos/conjuntoProfesoresClass.php';
require_once '../Modelos/conjuntoAulasClass.php';
$cursos = new conjuntoCursos();
$profesores = new conjuntoProfesores();
$aulas = new conjuntoAulas();
$curso = $cursos->leerCurso($_GET['idCurso']);
require_once '../Vistas/modificarCursoVista.php';
