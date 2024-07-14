<?php
require_once '../modelos/usuariosClass.php';
$usuarios = new conjuntoUsuarios();
$libroAdquirir = $usuarios->adquirirLibro($_GET['idUsuario'] , $_GET['idLibro']);
require_once '../controladores/consultarLibrosControlador.php';
