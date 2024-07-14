<?php
require_once 'conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
$persona = new Persona($_POST['nombre'],$_POST['ape1'],$_POST['ape2'],$_POST['dni'],$_POST['ciudad']);
$personas->anadirPersona($persona);
header('Location: index.php');

