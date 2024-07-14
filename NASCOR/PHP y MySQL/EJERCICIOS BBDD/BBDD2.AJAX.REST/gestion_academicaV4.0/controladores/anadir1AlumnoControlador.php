<?php
$cursos = json_decode(file_get_contents('https://nascor13.md360.es/gestion_academicaV3.5/controladores/leerCursosJSONControlador.php'),true );
require_once '../vistas/anadirAlumnoVista.php';