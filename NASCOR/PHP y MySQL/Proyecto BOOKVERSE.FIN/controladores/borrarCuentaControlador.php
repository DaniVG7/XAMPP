<?php
require_once '../modelos/usuariosClass.php';
$listaUsuarios = new conjuntoUsuarios();
$listaUsuarios->borrarCuenta($_GET['idUsuario']);
session_destroy();
header('Location: ../index.php');