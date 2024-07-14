<?php
session_start();
?>

<html>
   <head>
      <title>Ejercicio</title>
      <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
   </head>
   <body>
      <form action="" method="post">
         <table align="center" border="0">
            <tr>
               <th colspan="2">Ejercicio Sesiones</th>
            </tr>
            <tr>
               <td>Añada un nombre:</td>
               <td><input type="text" name="nombre" /></td>
            </tr>
            <tr>
               <td colspan="2" align="center"><input type="hidden" name="operacion" value="añadir">
				   <input type="submit" name="submit" value="Enviar" /></td>
            </tr>
         </table>
      </form>


	   
<?php	   
if (isset($_POST['operacion'])) {
    if ($_POST['operacion'] === 'añadir') {
        // Tu código para añadir un nombre
        $nombre = $_POST['nombre'];
        if ($nombre != "") {
            $_SESSION['nombre'][] = $nombre;
            header("location:index.php");
        } else {
            echo 'Error en el nombre';
        }
    } elseif ($_POST['operacion'] === 'borrar') {
        // Tu código para borrar un nombre
        $indice = $_POST['posicion'];
        if (isset($_SESSION['nombre'][$indice])) {
            unset($_SESSION['nombre'][$indice]);
        }
    }
}
if (!isset($_SESSION['nombre']) || empty($_SESSION['nombre'])) {
    echo 'No hay nombres';
} else {
    if (count($_SESSION['nombre']) > 0) {
        echo '<form action="index.php" method="post">
            	<ul>';
        foreach ($_SESSION['nombre'] as $clave => $valor) {
            echo '<li><input type="radio" name="posicion" value="' . $clave . '" />' . $valor . '</li>';
        }
        echo '<input type="hidden" name="operacion" value="borrar">';
        echo '<input type="submit" value="Borrar" />';
        echo '</ul>
            </form>';
    }
}

	   

?>
   </body>
</html>