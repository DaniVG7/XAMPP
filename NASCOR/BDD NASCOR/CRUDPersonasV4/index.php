<?php
require_once 'conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
echo '<a href="anadir1Persona.php">Añadir persona</a><hr>';
$personas->leerPersonas();