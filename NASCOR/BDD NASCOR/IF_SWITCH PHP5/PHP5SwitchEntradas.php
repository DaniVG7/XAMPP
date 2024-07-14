<?php
$numeroEntradas = $_POST['numeroEntradas'];
$precio = 10;
if($numeroEntradas<=0){
    echo 'Introduzca un número de entradas válido';
}else{
    switch ($numeroEntradas) {
        case 1 :
            $precio = $precio;
            break;
        case 2 :
            $precio = $numeroEntradas*$precio*0.90;
            break;
        case 3 :
            $precio = $numeroEntradas*$precio*0.85;
            break;
        case 4 :
            $precio = $numeroEntradas*$precio*0.80;
            break;
        
        default:
            $precio = $numeroEntradas*$precio*0.75;;    
    }
    echo 'El precio de '.$numeroEntradas.' entradas es de: '.$precio.' Euros.';
} 
?>