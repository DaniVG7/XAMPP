<?php
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];

if(is_numeric($numero1) and is_numeric($numero2)){
    if($numero1>$numero2){
    echo 'El número más grande es <strong>el primer número</strong>: '.$numero1.'<br>';
    echo 'La suma de ambos números es: '.$numero1.' + '.$numero2.' = '.($numero1+$numero2);
    }else if($numero1==$numero2){
    echo 'Ambos números <strong>son iguales</strong>'.'<br>';
    echo 'La suma de ambos números es: '.$numero1.' + '.$numero2.' = '.($numero1+$numero2);
    }else{
    echo 'El número más grande es <strong>el segundo número</strong>: '.$numero2.'<br>';
    echo 'La suma de ambos números es: '.$numero1.' + '.$numero2.' = '.($numero1+$numero2);
    }
}else{
    echo '<h2>Introduzca números en ambos campos</h2>';
}
?>