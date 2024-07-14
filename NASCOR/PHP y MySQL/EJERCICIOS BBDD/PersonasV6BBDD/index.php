<?php
require_once 'conjuntoPersonasClass.php';
$listaPersonas = new personas();
echo '<pre>';
print_r($listaPersonas->personas);