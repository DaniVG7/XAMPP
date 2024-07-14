<?php
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData);

// Acceder al valor 'nombre'
$nombre = $data->nombre;

require_once '../modelos/cursoClass.php';
$listaCursos = new cursos();
$listaCursos->anadirCurso($nombre);
header('HTTP/1.1 200 OK');