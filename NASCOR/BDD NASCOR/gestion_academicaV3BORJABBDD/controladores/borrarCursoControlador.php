<?php
require_once '../modelos/conjuntoCursosClass.php';
$cursos = new conjuntoCursos();
$cursos->borrarCurso($_GET['posicion']);
header ('Location: leerCursosControlador.php');