<?php
require_once '../Modelos/conjuntoAulasClass.php';
$aulas = new conjuntoAulas();
$aulas-> añadirAula($_POST['nombre']);
header('Location: leerAulasControlador.php');