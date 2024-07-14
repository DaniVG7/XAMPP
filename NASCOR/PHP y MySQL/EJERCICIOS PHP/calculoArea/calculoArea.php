<?php
print_r($_POST);
$base =(int)$_POST['base']; //Para que si el usuario introduce la medida (20cm), cogemos solo el 20 para hacer el cálculo.
$altura= (int)$_POST['altura']; // '' idem
echo '<hr>';
echo 'El cálculo sería: '.$base.' multiplicado por '.$altura;
echo '<hr>';
echo 'El área del rectángulo escogido es: '.$base*$altura.'cm';
?>