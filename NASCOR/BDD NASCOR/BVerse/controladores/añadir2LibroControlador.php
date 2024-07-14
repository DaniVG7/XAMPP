<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once '../modelos/conjuntoLibrosClass.php';
require_once '../modelos/autoresClass.php';
$listaLibros= new conjuntoLibros();
$libroAñadido = $listaLibros->añadirLibro($_POST['titulo'], $_POST['numPaginas'], $_POST['idioma'], $_POST['añoPublicacion'], $_POST['generoLiterario'], $_POST['premios'],$_POST['imagen'],$_POST['sinopsis'],$_POST['autor']);
header ('Location: ../controladores/consultarLibrosControlador.php');
