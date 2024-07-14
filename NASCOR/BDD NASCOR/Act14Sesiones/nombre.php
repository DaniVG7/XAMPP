<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captura el valor del campo 'nombre' del formulario
    $nombreIntroducido = $_POST['nombre'];
    
    // Verifica si ya existe un arreglo en la variable de sesión para los nombres
    if (!isset($_SESSION['nombres'])) {
        $_SESSION['nombres'] = array();
    }
    
    // Agrega el nombre introducido al arreglo
    $_SESSION['nombres'][] = $nombreIntroducido;
}

// Redirecciona de nuevo a la página principal (puede ser la misma página o una diferente)
header('Location: index.php');
exit();
?>