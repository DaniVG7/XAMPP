<?php
include '../modelos/conjuntoAlumnosClass.php';
$alumnos = new conjuntoAlumnos(); 
$nuevoAlumno = new Alumno($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad'],$_POST['curso'],$_POST['nivel']);
$alumnos->modificarAlumno($_POST['pos'],$nuevoAlumno); //llamamos a la funcion modificar coches y añadimos el $nuevoCoche
header('Location: ../index.php');
?>