<?php
require_once '../../0comun/libreria.php';
cabecera('../añadirModificar.css','');
if(!empty($_SESSION)){ ?>
<main>
<div class="modificarDatos">
   <h2>Datos del <?php echo $datosUsuario['username'] ?> (<?php echo $datosUsuario['perfilUsuario'] ?>)</h2>
   <form class="formcurso" method="POST" action="../controladores/modificar2Usuariocontrolador.php">
	<label>Perfil:</label><input type="text" disabled name="perfil" value = "<?php echo $datosUsuario['perfilUsuario']?> "><br>
	<label>Nombre:</label><input type="text" required name="nombre" value="<?php echo $datosUsuario['nombre'] ?>" ><br>
	<label>Primer apellido:</label><input type="text" required name="ape1" value="<?php echo $datosUsuario['apellido1'] ?>" ><br>
	<label>Segundo apellido:</label><input type="text" required name="ape2" value="<?php echo $datosUsuario['apellido2'] ?>" ><br>
	<label>DNI:</label><input type="text" required name="DNI" value="<?php echo $datosUsuario['DNI'] ?>"><br>		
	<label>Fecha de nacimiento:</label><input type="date" required name="fechaN" value="<?php echo $datosUsuario['fechaNacimiento'] ?>" ><br>
	<label>Teléfono de contacto:</label><input type="number" required name="numeroTelefono" value="<?php echo $datosUsuario['numeroTelefono'] ?>" ><br><br>
	<input type="hidden" name= "idUsuario" value=" <?php echo $datosUsuario['idUsuario'] ?>">
	<input type="submit" value="Modificar datos"> 
  </form>	
		<div class="eliminar-container">
					<a href="../controladores/borrarCuentaControlador.php?idUsuario=<?php echo $datosUsuario['idUsuario']; ?>">
						<button class="eliminar">Eliminar cuenta</button>
					</a>
		</div>
		<div class="cambiar-contraseña">
	<a href= "../controladores/modificarContraseñaControlador.php?idUsuario=<?php echo $datosUsuario['idUsuario']; ?>"><button class="cambiarContraseña">Cambiar contraseña</button></a><br><br>
		</div>
</div>
</main>
<?php
}else{
	echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
}

