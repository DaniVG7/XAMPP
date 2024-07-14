<?php
require_once '../modelos/conjuntoLibrosClass.php';
$listaLibros = new conjuntoLibros();
$listaLibros->borrarLibro($_GET['idLibro']);
header ('Location: consultarLibrosControlador.php');