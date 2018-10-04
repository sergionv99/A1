<?php
//Esta funcion conmbinaremos array_values para scar valores de un array y array_unique para que solo deje los unicos) 
function duplicados_NO($numeros) {
   //array_values devuelve todos los valores de un array http://php.net/manual/es/function.array-values.php
   //array_unique elimina los valores duplicados del array
    $num_sin_repetir= array_values(array_unique($numeros));
  return $num_sin_repetir ;}
//el array donde guardaremos los numeros
  
$lista = array(1,1,2,2,3,4,5,5);
print_r ($nueva_lista = (duplicados_NO($lista)));


