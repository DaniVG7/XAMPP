<?php
    $numeroDNI = $_POST['numeroDNI'];
    $letraDNI = $_POST['letraDNI'];
    $arrayletra = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];
    $resultadoLetra;  
    
    
if (!is_numeric($numeroDNI) || floor($numeroDNI) != $numeroDNI || $numeroDNI < 1 || $numeroDNI > 99999999) { //!is_numeric estamos verificando que lo que introduce sea un numero (equivalente en JS al !IsNaN) y con el floor, que sea un numero entero (equivalente en JS al num.IsInteger)
    echo "Este número de DNI no es válido ❌";
    return;
}else if (!preg_match("/^[a-zA-Z]+$/", $letraDNI)) { //!preg_match es el equivalente al .test de JS, para comprobar si en $letraDNI introducimos solo letras.
    echo 'Debe introducir una letra';
    return;
}else{
    $resultadoLetra = $arrayletra[$numeroDNI % 23];
    if (strtoupper($letraDNI) === $resultadoLetra){ //strtoupper es el equivalente a toUpperCase() de JS para pasarlo a MAYUSC.
        echo "DNI VÁLIDO";
    }
    else {
        echo "La letra del DNI no es correcta ❌";
    }
}
echo "<br>"."El numero de DNI correcto es: ".$numeroDNI.'-'.$resultadoLetra.'✅'


?>
