<?php
require_once '../../0comun/libreria.php';
cabecera('../añadirModificar.css','');
if (!empty($_SESSION)) {
?>

<div class="modificarDatos">
    <h2>Datos del <?php echo $datosUsuario['username'] ?> (<?php echo $datosUsuario['perfilUsuario'] ?>)</h2>
    <form class="formcurso" method="POST" action="../controladores/modificar2ContraseñaControlador.php">
        <label for="nombre">Usuario:</label>
        <input type="text" disabled  name="usuario" value="<?php echo $datosUsuario['username'] ?>"><br>
		<label for="ape1">Contraseña:</label>
		<input type="password" required name="password" value="<?php echo $datosUsuario['password'] ?>" ><br>

        <input type="hidden" name="idUsuario" value="<?php echo $datosUsuario['idUsuario'] ?>">
        <input type="submit" value="Modificar contraseña">
    </form>
</div>

<?php
} 
?>