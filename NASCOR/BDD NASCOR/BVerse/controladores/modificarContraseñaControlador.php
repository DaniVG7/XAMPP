<?php 
require_once '../modelos/usuariosClass.php'; 
$listaUsuarios = new conjuntoUsuarios();
if(!empty($_SESSION)){
	$datosUsuario = $listaUsuarios->verContraseñaUsuario($_GET['idUsuario']);
}

require_once '../vistas/modificarContraseñaVista.php';
