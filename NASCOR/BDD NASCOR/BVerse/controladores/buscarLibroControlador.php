<?php

require_once '../modelos/conjuntoLibrosClass.php';
$listaLibros = new conjuntoLibros();
$listaLibros->buscarLibro($_POST['busqueda']);
require_once '../vistas/buscarLibroVista.php';



