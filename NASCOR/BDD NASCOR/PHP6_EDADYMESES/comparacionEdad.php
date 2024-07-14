<?php 
$edadRecibida = $_POST['edad'];
if ($edadRecibida>=30){
    echo 'Eres una persona madura.';
}else if($edadRecibida<30 && $edadRecibida>0){
    echo 'Aún eres jóven.';
}else{
    echo 'Introduce una edad correcta';
}



?>