<?php
require_once '../modelos/autoresClass.php';
$autores = new conjuntoAutores();
$datosAutor = $autores->verDatosAutor($_GET['idAutor']);
if(($datosAutor['numLibros'])==='0'){
	$autores->borrarAutor($_GET['idAutor']);
}else{
    $_SESSION['mensaje_alerta'] = "No se puede borrar un autor que tiene libros en nuestra biblioteca.⚠️";
}
header ('Location: ../controladores/leerAutoresControlador.php');
