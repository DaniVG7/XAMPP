<?php
require_once '../../0comun/libreria.php';
cabecera('../añadirModificar.css','');
if (!empty($_SESSION)) {
?>

<div class="modificarDatos">
    <h2>Datos del <?php echo $datosUsuario['username'] ?> (<?php echo $datosUsuario['perfilUsuario'] ?>)</h2>
    <form class="formcurso" method="POST" action="../controladores/modificar2PrivilegiosControlador.php">
        <label for="perfil">Privilegios:</label>
        <select id="perfil" name="perfil">
            <?php
            $perfiles = array("Administrador", "Usuario"); // Reemplaza con tus tipos de perfiles reales

            foreach ($perfiles as $perfil) {
                $selected = ($perfil === $datosUsuario['perfilUsuario']) ? 'selected' : '';
                echo '<option value="' . $perfil . '" ' . $selected . '>' .$perfil . '</option>';
            }
            ?>
        </select>

        <label for="nombre">Nombre:</label>
        <input type="text" required name="nombre" value="<?php echo $datosUsuario['nombre'] ?>"><br>
		<label for="ape1">Primer apellido:</label>
		<input type="text" required name="ape1" value="<?php echo $datosUsuario['apellido1'] ?>" ><br>
		<label for="ape2">Segundo apellido:</label>
		<input type="text" required name="ape2" value="<?php echo $datosUsuario['apellido2'] ?>" ><br>
		<label for="DNI">DNI:</label>
		<input type="text" required name="DNI" value="<?php echo $datosUsuario['DNI'] ?>"><br>		
		<label for="fechaN">Fecha de nacimiento:</label>
		<input type="date" required name="fechaN" value="<?php echo $datosUsuario['fechaNacimiento'] ?>" ><br>
		<label for="numeroTelefono">Teléfono de contacto:</label>
		<input type="number" required name="numeroTelefono" value="<?php echo $datosUsuario['numeroTelefono'] ?>" ><br><br>
        <!-- Resto de campos de entrada -->

        <input type="hidden" name="idUsuario" value="<?php echo $datosUsuario['idUsuario'] ?>">
        <input type="submit" value="Modificar datos">
    </form>
</div>

<?php
}else{
	echo '<h2 style="position:absolute; top:10%; left:10%;">Inicie sesión para acceder a la página ⚠️</h2>
			<a href="../index.php" style="position:absolute; top:30%; left:10%;"><button>Iniciar sesión</button></a>';
}
?>

