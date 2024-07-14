<?php
require_once '../modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$profe = new Profesor($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['ciudad'],$_POST['dni'],$_POST['curso']);
$profesores->anadirProfesor($profe);
header ('Location: leerProfesoresControlador.php');
