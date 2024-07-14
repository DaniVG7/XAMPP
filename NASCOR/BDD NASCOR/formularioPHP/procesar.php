<pre>
    <? print_r($_POST);?>   <?//Imprimimos el Array de $_POST ?>
</pre>


Hola <?php echo $_POST['nombre']; ?>.
Usted tiene <?php echo $_POST['edad']; ?> años.

<? // echo en realidad es mostrar algo en pantalla;
 // Hola sería html, acontinuacion el codigo php donde le decimos que imprima en pantalla el name 'nombre' del metodo POST.
 // acontinuacion lo mismo con Usted tiene y el name 'edad' del metodo POST.
 //Si nos fijamos los names (nombre y edad) aparecen entre corchetes [], son arrays especiales. Y se pueden imprimir con print_r($_METODO);
 //web de referencia www.php.net 
 
?>