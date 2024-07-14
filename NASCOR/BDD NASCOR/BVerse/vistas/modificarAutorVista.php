<?php
require_once '../../0comun/libreria.php';
cabecera('../añadirModificar.css','');
if(!empty($_SESSION)){ ?>
<div class="modificarDatos">
 <h2>Modificar datos <?php echo $datosAutor['nombre'].' '.$datosAutor['apellido1'].' '.$datosAutor['apellido2'];?></h2>
  <div class="formcurso"><form method="POST" action="../controladores/modificar2Autorcontrolador.php">
	<label>Nombre:</label><input type="text" required name="nombre" value="<?php echo $datosAutor['nombre'] ?>" ><br>
	<label>Primer apellido:</label><input type="text"  name="ape1" value="<?php echo $datosAutor['apellido1'] ?>" ><br>
	<label>Segundo apellido:</label><input type="text"  name="ape2" value="<?php echo $datosAutor['apellido2'] ?>" ><br>		
	<label>Fecha de nacimiento:</label><input type="date" name="fechaN" value="<?php echo $datosAutor['fechaNacimiento'] ?>" ><br>
	<label>Premios:</label><input type="text" name="premios" value="<?php echo $datosAutor['premios'] ?>" ><br>
	<label>Genero literario:</label><input type="text" required name="generoLiterario" value="<?php echo $datosAutor['generoLiterario'] ?>" ><br>
	<input type="hidden" name= "idAutor" value=" <?php echo $datosAutor['idAutor'] ?>">
	<input type="submit" value="Modificar datos"> 
  </form><br><br>
	  <?php
	  if($_SESSION['perfilUsuario'] === 'Administrador'){
		echo '<a href="../controladores/borrarAutorControlador.php?idAutor=' . $datosAutor['idAutor'] . '"><button>Borrar</button></a>';
		}
	 ?>
</div>
<?php
	
 }