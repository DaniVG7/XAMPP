<?php
if(isset($_POST['numero'])){
$numSaludos = $_POST['numero'];
$i = 1;
while ($i <= $numSaludos){
    echo "Hola, esta es la <span style='color:red'><strong>$i ª</strong></span> vez que te saludamos, que tengas buen día!<br>";
    $i++;
}
}else{
    echo "El número introducido es incorrecto o inexistente"; //Esto apareceria cuando se ejecuta el PHP antes que el Html directamente desde el navegador.
}
?>