	public function modificarContraseña($idUsuario, $password){
<?php 
require_once '../modelos/usuariosClass.php';
$usuarios = new conjuntoUsuarios();
$usuarios->modificarContraseña( $_POST['idUsuario'] , $_POST['password']);
header ('Location: ../index.php');
