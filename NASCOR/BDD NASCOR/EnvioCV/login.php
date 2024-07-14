<?php
include '../0comun/libreria.php';
cabecera("login.css",'../0comun/estilos.css');
echo '<div>
			<a href="index.php"><button class="btn2">Añadir candidatura</button></a>
	  </div>';
echo"<main>
		<div class='login'>
		<h1>Iniciar sesión como administrador</h1>
		<form method='post'>
			<input type='text' name='username' placeholder='Nombre de Usuario' required><br><br><br>

			<input type='password' name='password' placeholder='Contraseña' required><br><br>
			<input type='submit' value='Iniciar sesión'>
		</form></div>";

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) { //Si se introdujo usuario y contraseña...
    // Verifica las credenciales del administrador.
    $adminUsername = 'admin';
    $adminPassword = 'contraseña';
	//Verificamos si el valor introducido en el usuario y la contraseña son igual a las programadas...
    if ($_POST['username'] === $adminUsername && $_POST['password'] === $adminPassword) {
        $_SESSION['admin'] = true; // Establece la variable de sesión para indicar la autenticación
        header('Location: listaCandidatos.php'); // Redirige a la lista de candidatos
        exit();
    } else {
	//Si el usuario y/o contraseña no son correctos creamos la variable error con el mensaje.
        $error = '<div class="error"><strong>Usuario y/o contraseña incorrectos ⚠️⚠️</strong></div>';
    }
}
//Si se creó la variable error ya que se introdujeron datos incorrectos de inicio de sesion, mostramos el mensaje de la variable $error
if (isset($error)) { echo '<p>' . $error . '</p>'; }  
echo '</main>';
pie("");
?>