<?php
include 'conjuntoCochesClass.php';  //cogemos la clase mediante el archivo conjuntoCochesclass.php
$coches = new conjuntoCoches(); //añadimos una nueva clase conjuntoCoches.
$coches->borrarCoche($_GET['posicion']);  //Llamamos a la funcion borrar coche que lo que hará es:
//unset($this->coches[$pos]);    <-- Con el metodo unset eliminar el objeto coche con la posicion que queremos dentro del objeto conjuntoCoches.
//$this->guardarCoches();        <-- Guardar los datos con el elemento ya borrado
header('Location: index.php');  //<-- Volvemos a index.php
?>