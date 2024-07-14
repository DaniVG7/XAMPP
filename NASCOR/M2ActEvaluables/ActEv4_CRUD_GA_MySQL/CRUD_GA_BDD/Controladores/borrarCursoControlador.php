<?php
require_once '../Modelos/conjuntoCursosClass.php';
$cursos = new conjuntoCursos();
$cursos->borrarCurso($_GET['idCurso']);
header ('Location: leerCursosControlador.php');
