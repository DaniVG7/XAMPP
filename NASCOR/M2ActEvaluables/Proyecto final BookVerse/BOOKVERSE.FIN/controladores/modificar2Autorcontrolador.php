<?php 
require_once '../modelos/autoresClass.php';
$autores = new conjuntoAutores();
$autores->modificarAutor( $_POST['idAutor'] ,$_POST['nombre'], $_POST['ape1'], $_POST['ape2'], $_POST['fechaN'], $_POST['premios'], $_POST['generoLiterario']);
header ('Location: ../controladores/leerAutoresControlador.php');
