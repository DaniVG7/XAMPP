<?php
require_once '../modelos/conjuntoLibrosClass.php';
$libros = new conjuntoLibros();
$libros->añadirLibro($_POST['titulo'],$_POST['año'],$_POST['idioma'],$_POST['idPropietario']);
//require_once '../vistas/leerLibrosVista.php';

header ('Location: ../index.php');
