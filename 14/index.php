<?php
//Con basename $_SERVER['PHP_SELF']); hacewmos referenica al fichero actual
$file = basename($_SERVER['PHP_SELF']); 
$a=24;
$b="Lineas gratis  xdd";

$c="xdd";
//con cont(file)($file)) contamos la lineas del fichero ylas guardamos en $num_lineas
$num_lineas = count(file($file)); 

echo "Hay $num_lineas lineas en  $file";
