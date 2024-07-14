<?php

require_once '../modelos/conjuntoLibrosClass.php';
$listaLibrosUsuario = new conjuntoLibros();
$listaLibrosUsuario->devolverLibro($_GET['idLibro']);
header ('Location: ../controladores/leerLibrosUsuarioControlador.php');
