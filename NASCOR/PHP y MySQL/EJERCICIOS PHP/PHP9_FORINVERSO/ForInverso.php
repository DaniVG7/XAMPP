<?php

foreach($_POST as $val){
    $numeros[] = $val;
}

krsort($numeros);
echo '<h2>Orden Inverso</h2>';
foreach ($numeros as $num){
    echo $num.'<br>';
}

$numMayor = $numeros[0];
for($i=0; $i<count($numeros); $i++){
    if($numMayor < $numeros[$i]){
        $numMayor = $numeros[$i];
    }
}
echo "<h2>El número mayor es: </h2><h3>$numMayor</h3>";


?>

