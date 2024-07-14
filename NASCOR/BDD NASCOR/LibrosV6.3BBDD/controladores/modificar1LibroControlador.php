<?php
include '../modelos/conjuntoLibrosClass.php';
$libros = new conjuntoLibros();
$idLibro=$_GET['posicion'];
$l=$libros->leerLibro($idLibro);
require_once '../vistas/modificarLibroVista.php';
?>