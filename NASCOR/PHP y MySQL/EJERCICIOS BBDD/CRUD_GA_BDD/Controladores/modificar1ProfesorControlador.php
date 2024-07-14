<?php
require_once '../Modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$profesor = $profesores->leerProfesor($_GET['idProfesor']);
require_once '../Vistas/modificarProfesorVista.php';
