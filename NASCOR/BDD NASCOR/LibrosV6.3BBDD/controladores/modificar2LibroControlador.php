<?php
session_start();
include '../modelos/conjuntoLibrosClass.php';
$libros = new conjuntoLibros();
if ($libros->modificarLibro($_POST['pos'],$_POST['titulo'],$_POST['año'],$_POST['idioma'])) {
	$_SESSION['mensaje']='<span style="color:green; background-color:white">Se ha modificado correctamente</span><br>';
} else {
	$_SESSION['mensaje']='<span style="color:red; background-color:white">NO se ha modificado correctamente</span><br>';
}

header('Location: ../index.php');