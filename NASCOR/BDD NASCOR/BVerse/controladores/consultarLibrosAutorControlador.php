<?php
require_once '../modelos/autoresClass.php';
require_once '../modelos/conjuntoLibrosClass.php';
$listaLibros = new conjuntoLibros();
if(!empty($_SESSION)){
$autores = new conjuntoAutores();
$librosAutor = $autores->consultarLibrosAutor($_GET['idAutor']);
}
require_once '../vistas/consultarLibrosAutorVista.php';
//echo'<pre>';
//var_dump($librosAutor);
