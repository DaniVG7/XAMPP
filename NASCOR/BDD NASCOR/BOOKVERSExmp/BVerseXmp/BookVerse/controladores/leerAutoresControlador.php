<?php

require_once '../modelos/autoresClass.php';
require_once '../modelos/usuariosClass.php';
$usuarios = new conjuntoUsuarios();
if(!empty($_SESSION)){
$usuario = $usuarios->leerUsuario($_SESSION['username']);

$listaAutores = new conjuntoAutores();
}
require_once '../vistas/leerAutoresVista.php';