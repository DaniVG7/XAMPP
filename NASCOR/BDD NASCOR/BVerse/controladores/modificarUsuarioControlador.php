<?php
require_once '../modelos/usuariosClass.php'; 
$listaUsuarios = new conjuntoUsuarios();
if(!empty($_SESSION)){
	$datosUsuario = $listaUsuarios->verDatosUsuario($_GET['username']);
}

require_once '../vistas/modificarUsuarioVista.php';