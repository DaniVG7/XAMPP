<?php
require_once '../modelos/usuariosClass.php';
$listaUsuarios = new conjuntoUsuarios();
$listaUsuarios->buscarUsuario($_POST['busqueda']);

require_once '../vistas/buscarUsuarioVista.php';

