<?php
require_once '../modelos/conjuntoLibrosClass.php';
require_once '../modelos/autoresClass.php';
$listaLibros = new conjuntoLibros();
$listaAutores = new conjuntoAutores();
$datosLibro = $listaLibros->leerLibro($_GET['idLibro']);

require_once '../vistas/actualizarLibroVista.php';