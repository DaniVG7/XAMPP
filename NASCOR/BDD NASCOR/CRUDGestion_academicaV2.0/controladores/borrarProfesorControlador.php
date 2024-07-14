<?php
require_once '../modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$profesores->borrarProfesor($_GET['posicion']);
header ('Location: leerProfesoresControlador.php');