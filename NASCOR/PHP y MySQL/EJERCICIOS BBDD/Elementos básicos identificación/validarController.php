<?php
include '../modelos/intranetClass.php';
$conexionIntranet = new intranet();
if ($conexionIntranet->comprobarUsuario($_POST['username'],$_POST['password'])) {
	header('Location: ../index.php');
}
else {
	echo 'identificación incorrecta';
}