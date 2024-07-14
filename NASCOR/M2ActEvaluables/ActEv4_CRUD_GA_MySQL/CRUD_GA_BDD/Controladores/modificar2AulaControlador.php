<?php
include_once '../Modelos/conjuntoAulasClass.php';
$aula = new conjuntoAulas();
$aula->modificarAula($_POST['idAula'], $_POST['nombre']);
header ('Location: leerAulasControlador.php');
