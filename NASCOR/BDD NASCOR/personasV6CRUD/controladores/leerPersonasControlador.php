<?php
require_once '../modelos/conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
//echo '<a href="anadir1Persona.php">Añadir persona</a><hr>';
//$personas->leerPersonas();
require_once '../vistas/leerPersonasVista.php';