<?php

//Creamos dos variables
$saludo ="hola";
$despedida ="adios";
//las printamos
echo "la variable Ssaludo dice: ". $saludo. "<br>";
echo "la variable Sdespedida dice: ". $despedida;
//creamos una variable que almacene el $saludo antes de que guarde el valor de $despedida
$clon = $saludo;
$saludo = $despedida;
//$despedida tendra el valor $clon que contiene el original de $saludo
$despedida = $clon;

echo "<br><br>la variable Ssaludo dice: ". $saludo. "<br>";
echo "la variable Sdespedida dice: ". $despedida;
