<?php
include 'conjuntoPersonasClass.php';
$personas = new conjuntoPersonas();
$personas->borrarPersona($_GET['posicion']);
header('Location: index.php');