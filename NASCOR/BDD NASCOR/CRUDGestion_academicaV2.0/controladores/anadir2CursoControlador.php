<?php
require_once '../modelos/conjuntoCursosClass.php';
$listaCursos = new conjuntoCursos();
$curs = new Curso($_POST['id'],$_POST['nombre']);
$listaCursos->anadirCurso($curs);
header('Location: leerCursosControlador.php');

