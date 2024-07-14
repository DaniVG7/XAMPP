<?php
session_start();
require_once '../modelos/conjuntoLibrosClass.php';
$listaLibros = new conjuntoLibros();
$listaLibros->leerLibrosUsuario();
require_once '../vistas/leerLibrosUsuarioVista.php';
?>
