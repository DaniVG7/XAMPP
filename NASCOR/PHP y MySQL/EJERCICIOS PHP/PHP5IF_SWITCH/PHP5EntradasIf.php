<?php
$numeroEntradas = $_POST['numeroEntradas'];
$precio = 10;

if ($numeroEntradas <= 0) {
    echo 'Introduzca un número de entradas válido';
} else {
    if ($numeroEntradas == 1) {
        $precio = $precio;
    } elseif ($numeroEntradas == 2) {
        $precio = $numeroEntradas * $precio * 0.90;
    } elseif ($numeroEntradas == 3) {
        $precio = $numeroEntradas * $precio * 0.85;
    } elseif ($numeroEntradas == 4) {
        $precio = $numeroEntradas * $precio * 0.80;
    } else {
        $precio = $numeroEntradas * $precio * 0.75;
    }

    echo 'El precio de las entradas seleccionadas es de: ' . $precio . ' Euros.';
}
?>
