<?php
include '../modelos/intranetClass.php';
$conexionIntranet = new intranet();

if ($conexionIntranet->comprobarUsuario($_POST['username'], $_POST['password'])) {
    // Obtén los datos del usuario desde la base de datos
    $datosUsuario = $conexionIntranet->obtenerDatosUsuario($_POST['username']);

    if ($datosUsuario) {
        // Almacena los datos del usuario en la sesión
        $_SESSION['idUsuario'] = $datosUsuario['idUsuario'];
        $_SESSION['username'] = $_POST['username'];
		$_SESSION['perfilUsuario'] = $datosUsuario['perfilUsuario'];
		$_SESSION['valor_cookie'] = $datosUsuario['valor_cookie'];
		header('Location: ../index.php');
    } else {
        echo '<script>alert("No se pudieron obtener los datos del usuario⚠️");</script>';
        echo '<script>setTimeout(function() { window.location = "../index.php"; }, 0);</script>';
    }
} else {
    echo '<script>alert("El Nombre de usuario o contraseña son incorrectos⚠️");</script>';
    echo '<script>setTimeout(function() { window.location = "../index.php"; }, 0);</script>';
}
