<?php
require_once '../modelos/conjuntoLibrosClass.php';
require_once '../modelos/autoresClass.php';
$listaLibros = new conjuntoLibros();
$listaAutores = new conjuntoAutores();
require_once '../vistas/añadirLibroVista.php';