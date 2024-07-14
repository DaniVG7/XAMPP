<?php
include_once '../modelos/conjuntoCursosClass.php';
$listaCursos = new conjuntoCursos();
$curso = new Curso($_POST['id'],$_POST['nombre']);
$listaCursos->modificarCurso($_POST['posicion'],$curso);
header ('Location: leerCursosControlador.php');