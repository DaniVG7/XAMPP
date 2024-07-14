<?php
include_once("../modelos/usuariosClass.php");
    // Recibe los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $DNI = $_POST["DNI"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $numeroTelefono = $_POST["numeroTelefono"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Validación de datos (puedes agregar más validaciones según tus necesidades)
	$usuarios = new conjuntoUsuarios();
	if ($usuarios->nombreUsuarioExiste($usuario)) {
		echo '<script>alert("El Nombre de usuario ya está en uso. Por favor, elige otro.😓");</script>';
   		echo '<script>setTimeout(function() { window.location = "../index.php"; }, 0);</script>';
	}else{
        $usuarios->registrarUsuario($nombre, $apellido1, $apellido2, $DNI, $fechaNacimiento,$numeroTelefono, $usuario, $contraseña);
	}
       // Redirige a una página de éxito o al inicio de sesión.
        require_once "../vistas/registro_exitosoVista.php";
	
    
//echo '<pre>';
//var_dump($_POST);

?>
