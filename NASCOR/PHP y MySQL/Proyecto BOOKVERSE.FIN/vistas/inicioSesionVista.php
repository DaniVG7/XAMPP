<?php 
require_once '../../0comun/libreria.php';
cabecera('../inicioSesion.css','');
session_start();
if(isset($_SESSION['username'])){
	header ('Location: leerLibrosUsuarioControlador.php');
}else{
?>
<div class="contenedor">
  <div class="bookverse">
    <img src="../bvrs.png" alt="Bookverse">
	<p>En la palma de tu mano</p>
    <p>Una historia en cada clic</p>
  </div>

<div class="inicioSesion">
		<h2>Iniciar sesión</h2>
			<form method="POST" action="../controladores/validarControlador.php">
				<input type="text" required name="username" value="" placeholder="Nombre de usuario"><br>
				<input type="password" required name="password" value="" placeholder="Contraseña"><br><br>
				<span>Aún no estás registrado?</span><br>
				<span><a href="../vistas/registrarUsuarioVista.php">Resgístrate aquí</a></span><br><br>
				<input type="submit" value="Iniciar sesión">
			</form>	
</div>
	
<?php
}
pie('');
?>