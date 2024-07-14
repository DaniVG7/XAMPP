<!--Desarrolle un algoritmo que permita convertir
calificaciones numéricas a letras según la siguiente
tabla de conversión:
NÚMERO LETRA
19-20 A
16-18 B
12-15 C
9-11 D
0-8 E -->

<?php 
$notaNumerica = $_POST['notaNumerica'];

    
if ($notaNumerica<=20 && $notaNumerica >= 19){
    echo 'Su nota es "A"';
}else if ($notaNumerica<=18 && $notaNumerica >= 16){
    echo 'Su nota es "B"';
}else if ($notaNumerica<=15 && $notaNumerica >= 12){
    echo 'Su nota es "C"';
}else if ($notaNumerica<=11 && $notaNumerica >= 9){
    echo 'Su nota es "D"';
}else if ($notaNumerica<=8 && $notaNumerica >= 0){
    echo 'Su nota es "E"';
}else{
    echo 'La nota introducida es incorrecta';
}

?>
