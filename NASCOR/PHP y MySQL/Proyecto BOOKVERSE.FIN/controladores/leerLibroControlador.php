<?php 
include_once '../modelos/conjuntoLibrosClass.php';
include_once '../modelos/autoresClass.php';
$listaLibros = new conjuntoLibros();
$libro = $listaLibros->leerLibro($_GET['idLibro']);
include_once '../vistas/leerLibroVista.php';