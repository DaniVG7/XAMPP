<?php
require_once '../modelos/conjuntoLibrosClass.php';
require_once '../modelos/autoresClass.php';
$listaLibros = new conjuntoLibros();
$listaAutores = new conjuntoAutores();

$listaLibros->modificarLibro($_POST['idLibro'],$_POST['autor'],$_POST['titulo'],$_POST['numPaginas'],$_POST['idioma'],$_POST['añoPublicacion'], $_POST['generoLiterario'],$_POST['premios'],$_POST['sinopsis']);

header ('Location: ../controladores/consultarLibrosControlador.php');