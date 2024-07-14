<?php
require_once '../Modelos/conjuntoAulasClass.php';
$aulas = new conjuntoAulas();
$aula = $aulas->leerAula($_GET['idAula']);
require_once '../Vistas/modificarAulaVista.php';
