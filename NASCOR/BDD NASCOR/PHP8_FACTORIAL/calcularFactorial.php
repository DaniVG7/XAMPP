<?php 
$numero= $_POST['numIntroducido'];
$factorial= 1;
for ($i=1; $i<=$numero; $i++){ // se puede iniciar la i en 2 ya que el valor 1 ya es el de factorial.
    $factorial= ($factorial * $i);
}
echo "El resultado de factorizar $numero es = $factorial";

?>