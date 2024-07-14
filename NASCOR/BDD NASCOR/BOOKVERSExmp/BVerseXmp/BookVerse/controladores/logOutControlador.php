<?php
require_once '../modelos/intranetClass.php';
$logOut = new intranet();
$logOut->borrarConexion();
header('Location: ../index.php');