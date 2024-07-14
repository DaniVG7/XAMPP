<?php
require_once '../modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
echo '<pre>';
print_r(new conjuntoProfesores());
$profesores->borrarProfesor($_GET['posicion']);
//header ('Location: leerProfesoresControlador.php');