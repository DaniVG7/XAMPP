<?php
include 'conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
$p=new Persona($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad']);
$personas->modificarPersona($_POST['pos'],$p);
header('Location: index.php');