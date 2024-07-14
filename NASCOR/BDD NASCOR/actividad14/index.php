<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
   <head>
      <title>Ejercicio</title>
      <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
   </head>
   <body>
      <form action="nombre.php" method="post">
         <table align="center" border="0">
            <tr>
               <th colspan="2">Ejercicio Sesiones</th>
            </tr>
            <tr>
               <td>Añada un nombre:</td>
               <td><input type="text" name="nombre" /></td>
            </tr>
            <tr>
               <td colspan="2" align="center"><input type="submit" name="submit" value="Enviar" /></td>
            </tr>
         </table>
      </form>
<?php
//if(!count($_SESSION)) {
//   echo 'No hay nombres';
//}
//else {
if (!isset($_SESSION['nombre']) || empty($_SESSION['nombre'])){
	echo 'No hay nombres';
}
else{
	if (count($_SESSION['nombre'])>0) {
//	if (is_array($_SESSION['nombre']) && count($_SESSION['nombre']) > 0) {
   	  echo '<form action="borrar.php" method="post">
            	<ul>';		
      foreach($_SESSION['nombre'] as $clave => $valor) {
         echo '<li><input type="radio" name="posicion" value="'.$clave.'" />'.$valor.'</li>';
      }
      echo '<input type="submit" value="Borrar" />';
      echo '</ul>
            </form>
           ';		
	 }

}
?>
   </body>
</html>