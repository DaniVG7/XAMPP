<?php
//session_start();
//session_unset();
//session_destroy();
//header('Location: leerLibrosUsuarioControlador.php');

require_once '../modelos/intranetClass.php';
$logOut = new intranet();
$logOut->borrarConexion();
header('Location: ../index.php');