<?php
session_start();
// Incluye el archivo que contiene la clase conjuntoLibros
include '../modelos/conjuntoLibrosClass.php';

// Crea una instancia de la clase conjuntoLibros
$conjuntoLibros = new conjuntoLibros();

// Verifica si se ha proporcionado un ID de libro a eliminar
if (isset($_GET['posicion'])) {
    $idLibro = $_GET['posicion']; // Obtenemos el ID del libro desde la URL


if ($conjuntoLibros->borrarLibro($idLibro)) {
    // Libro eliminado con éxito, almacenar mensaje de éxito en la sesión
    $_SESSION['mensaje'] = "<span style='color:green; background-color:white;'><strong>Libro eliminado exitosamente.</strong></span>";
} else {
    // Error al eliminar el libro, almacenar mensaje de error en la sesión
    $_SESSION['mensaje'] = "<span style='color:red; background-color:white;'><strong>Error al eliminar el libro.</strong></span>";
}
} else {
    echo "<span style='color:red'>ID de libro no proporcionado.</span>";
}

header("Location: ../index.php")
?>
