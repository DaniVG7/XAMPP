<?php 
require_once '../modelos/usuariosClass.php';
$usuarios = new conjuntoUsuarios();
$usuarios->modificarUsuario( $_POST['idUsuario'] ,$_POST['nombre'], $_POST['ape1'], $_POST['ape2'], $_POST['DNI'], $_POST['fechaN'], $_POST['numeroTelefono']);
header ('Location: ../index.php');
