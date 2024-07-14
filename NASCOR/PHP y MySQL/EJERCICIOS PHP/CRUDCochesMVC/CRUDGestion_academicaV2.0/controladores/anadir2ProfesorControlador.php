<?php
require_once '../modelos/conjuntoProfesoresClass.php';
$profesores = new conjuntoProfesores();
$profe = new Profesor($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['ciudad'],$_POST['dni'],$_POST['curso']);
$profesores->anadirProfesor($profe);
echo'<pre>';
print_r(new conjuntoProfesores());
/*header ('Location: leerProfesoresControlador.php');*/
