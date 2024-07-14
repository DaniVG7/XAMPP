<?php 
require_once '../modelos/autoresClass.php'; 
$listaAutores = new conjuntoAutores();
if(!empty($_SESSION)){
	$datosAutor = $listaAutores->verDatosAutor($_GET['idAutor']);
}

require_once '../vistas/modificarAutorVista.php';
