<?php
require_once '../modelos/conjuntoLibrosClass.php';
require_once '../modelos/usuariosClass.php';
$listaLibros = new conjuntoLibros();
$listaLibros->consultarLibros();
$usuarios = new conjuntoUsuarios();
if(!empty($_SESSION)){
	$usuario = $usuarios->leerUsuario($_SESSION['username']);
}
require_once '../vistas/consultarLibrosVista.php';