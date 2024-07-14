<?php
require_once '../Modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$profesores->añadirProfesor($_POST['nombre'],$_POST['ap1'],$_POST['ap2'],$_POST['DNI']);
header ('Location: ../Controladores/leerProfesoresControlador.php');
