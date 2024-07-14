<?php 

require_once '../modelos/autoresClass.php';
$listaAutores = new conjuntoAutores();
$listaAutores->añadirAutor($_POST['nombre'], $_POST['ape1'], $_POST['ape2'], $_POST['fechaNacimiento'], $_POST['generoLiterario'], $_POST['premios'] );

header ('Location: ../controladores/leerAutoresControlador.php');