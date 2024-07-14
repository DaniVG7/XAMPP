<?php

require_once '../modelos/autoresClass.php';
$listaAutores = new conjuntoAutores();
$listaAutores->buscarAutor($_POST['busqueda']);
require_once '../vistas/buscarAutorVista.php';