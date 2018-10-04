<?php
//Crearemos una funcion con functiion, la llamare armstronauta ($num) numero que la funcion evaluara
function armstronauta($num) { 
   //con strlen mediremos el tamaño de $num 
  $tam = strlen($num);
  //esta variable se ininizializa en 0 y mas adeltane ira guardando los valore que vayamos comprobando
  $conteo = 0;
  //Esta variable guarda los valores introducido por el usuario
  $num = (string)$num;
  $cont=0;
  for ($cont = 0; $cont < $tam; $cont++) {
  // la variable conteo guardara el valor de la variable $num elevada a la potencia exp    
  //pow  eleva valores a su potencia exp http://php.net/manual/es/function.pow.php
  //con {$cont} le decimos la posicion del $num a elevar    
 $conteo = $conteo + pow((string)$num{$cont},$tam);
  }
  //Con estos if/else comprobamos que el valor que nos devuelve la funcion sean igual que $num.
  if ((string)$conteo == (string)$num) {
    return "ES AMSTRONG";
  } else {
    return "NO ES AMSTRONG";
  }
}
//ponemos un numero Amstrong y uno que no 
echo "NUMERO 153 ".armstronauta(153);
echo "<br>NUMERO 45 ".armstronauta(21);



