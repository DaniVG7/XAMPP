<?php
include_once '../Modelos/conjuntoProfesoresClass.php';
$profesor = new conjuntoProfesores();
$profesor->modificarProfesor($_POST['idProfesor'], $_POST['nombre'], $_POST['ape1'], $_POST['ape2'], $_POST['DNI']);
header ('Location: leerProfesoresControlador.php');
