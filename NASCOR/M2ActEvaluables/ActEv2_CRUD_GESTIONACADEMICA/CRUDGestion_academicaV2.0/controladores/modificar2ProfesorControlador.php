<?php
include_once '../modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$profesor= new Profesor($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['ciudad'],$_POST['dni'],$_POST['curso']);
$profesores->modificarProfesor($_POST['posicion'],$profesor);
header ('Location: leerProfesoresControlador.php');