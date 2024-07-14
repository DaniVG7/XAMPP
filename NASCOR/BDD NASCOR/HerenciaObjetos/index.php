<?php 
require 'class.php';

$miCoche = new CocheDeLujo();
$miCoche -> setColor ('Blanco');
$miCoche -> setExtras ('Llantas Aleación');
$miCoche -> printCaracteristicas();

?>